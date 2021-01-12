<?php

// This file shall fail when doing PHP CS Fixer fix

function foo(      string  $foo): string {
    return "bar $foo";
}
