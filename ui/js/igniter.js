var head_pattern = /<head>([\w\W]+)<\/head>/gim;
var body_pattern = /<body>([\w\W]+)<\/body>/gim;
var title_pattern = /<title>(.*)<\/title>/;
var script_pattern = /<script src="[\S]+"><\/script>/g;
var source_pattern = /src="(.*)"/;

window.addEventListener("popstate", function (event) {
    $.ajax({
        url: event.target.location,
        method: "get",
        error: (xhr) => {
            if (xhr.status == 404) {
                $('body').load('error/404.php')
            }
        },
        beforeSend: () => { },
        success: (response) => {
            $("body").html(response);
        }
    });

})

// var main_scripts = [];

// window.addEventListener("load", function (event, ...args) {
//     var content = document.getElementsByTagName("html")[0].innerHTML;

//     (content.match(script_pattern) ?? []).forEach(script => {
//         var src = script.match(source_pattern)[1];

//         if (!main_scripts.includes(src)) {
//             main_scripts.push(src);
//         }
//     });
// })

$(document).ready(function () {
    $(document).on("click", "a", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");

        if (link.match(new RegExp("^(http|www)"))) {
            window.open(link, '_blank');
            return;
        }

        $.ajax({
            url: link,
            method: "get",
            error: (xhr) => {
                if (xhr.status == 404) {
                    $('body').load('error/404.php')
                }
            },
            beforeSend: () => { },
            success: (response) => {
                if (window.location.pathname != link) {
                    const temp_html = document.createElement("html");
                    let _body = $("body");

                    // (response.match(script_pattern) ?? []).forEach(script => {
                    //     var src = script.match(source_pattern)[1];
                        
                    //     if(main_scripts.includes(src)) {
                    //        response = response.replace(script, "");
                    //     }
                    // });

                    document.title = response.match(title_pattern)[1];
                    temp_html.innerHTML = response; 

                    for (const {name, value} of temp_html.children[1].attributes) {
                        _body.attr(name, value);
                    }

                    _body.html(response.match(body_pattern)[0]);
                    history.pushState(null, null, link);
                }
            }
        });
    })
});