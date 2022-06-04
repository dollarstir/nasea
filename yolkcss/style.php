<?php

$style =
[
    // styling widget called 'body'
    widget('body',
    [
        margin('0'),
        padding('0'),
    ]),
    dot('success', [
        color('green'),
        margintop('100px'),
    ]),
    dot('mail', [
        width('30%', true),
        margin('0 auto'),
    ]),
    id('btn', [
        margin('0 auto', true),
        // color('#ffcc00', true),
        marginleft('45%', true),
        margintop('20px', true),
    ]),
    dot('center', [
        fontsize('15px', true),
        textalign('center'),
    ]),
    widget('table', [
        width('100%'),
    ]),
];

 return export($style);
