<?php
namespace Concrete\Package\EditorSnippet;

use Concrete\Core\Editor\Snippet;
use Package;

class Controller extends Package
{
    protected $pkgHandle = 'editor_snippet';
    protected $appVersionRequired = '5.7.5';
    protected $pkgVersion = '0.9';
    // if the $appVersionRequired is "8.0" $pkgAutoloaderMapCoreExtensions is not required
    protected $pkgAutoloaderMapCoreExtensions = true;

    public function getPackageName()
    {
        return t('Editor Snippet');
    }

    public function getPackageDescription()
    {
        return t('Add a snippet to the rich text editor.');
    }

    public function install()
    {
        $pkg = parent::install();

        // add the test snippet
        // packages\editor_snippet\src\Concrete\Editor\TestSnippet.php
        // add($scsHandle, $scsName, $pkg = false)
        // - $scsHandle is the snippet class name, minus "Snippet", and in snake_case (lowercase and words spaced with underscores)
        $snippet = Snippet::add('test', 'Test Snippet', $pkg);
        // activiate the snippet
        $snippet->activate();

        /*when the package is uninstalled, the snippet entry will be removed from the SystemContentEditorSnippets table*/
    }
}
