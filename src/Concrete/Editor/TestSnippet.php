<?php
namespace Concrete\Package\EditorSnippet\Editor;

use Concrete\Core\Editor\Snippet;

class TestSnippet extends Snippet
{
    public function replace()
    {
        return 'test snippet text';
    }
}
