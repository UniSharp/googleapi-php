<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/documentation.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents a documentation page. A page can contain subpages to represent
 * nested documentation set structure.
 * </pre>
 *
 * Protobuf type <code>google.api.Page</code>
 */
class Page extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the page. It will be used as an identity of the page to
     * generate URI of the page, text of the link to this page in navigation,
     * etc. The full page name (start from the root page name to this page
     * concatenated with `.`) can be used as reference to the page in your
     * documentation. For example:
     * &lt;pre&gt;&lt;code&gt;pages:
     * - name: Tutorial
     *   content: &amp;#40;== include tutorial.md ==&amp;#41;
     *   subpages:
     *   - name: Java
     *     content: &amp;#40;== include tutorial_java.md ==&amp;#41;
     * &lt;/code&gt;&lt;/pre&gt;
     * You can reference `Java` page using Markdown reference link syntax:
     * `[Java][Tutorial.Java]`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The Markdown content of the page. You can use &lt;code&gt;&amp;#40;== include {path} ==&amp;#41;&lt;/code&gt;
     * to include content from a Markdown file.
     * </pre>
     *
     * <code>string content = 2;</code>
     */
    private $content = '';
    /**
     * <pre>
     * Subpages of this page. The order of subpages specified here will be
     * honored in the generated docset.
     * </pre>
     *
     * <code>repeated .google.api.Page subpages = 3;</code>
     */
    private $subpages;

    public function __construct() {
        \GPBMetadata\Google\Api\Documentation::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the page. It will be used as an identity of the page to
     * generate URI of the page, text of the link to this page in navigation,
     * etc. The full page name (start from the root page name to this page
     * concatenated with `.`) can be used as reference to the page in your
     * documentation. For example:
     * &lt;pre&gt;&lt;code&gt;pages:
     * - name: Tutorial
     *   content: &amp;#40;== include tutorial.md ==&amp;#41;
     *   subpages:
     *   - name: Java
     *     content: &amp;#40;== include tutorial_java.md ==&amp;#41;
     * &lt;/code&gt;&lt;/pre&gt;
     * You can reference `Java` page using Markdown reference link syntax:
     * `[Java][Tutorial.Java]`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * The name of the page. It will be used as an identity of the page to
     * generate URI of the page, text of the link to this page in navigation,
     * etc. The full page name (start from the root page name to this page
     * concatenated with `.`) can be used as reference to the page in your
     * documentation. For example:
     * &lt;pre&gt;&lt;code&gt;pages:
     * - name: Tutorial
     *   content: &amp;#40;== include tutorial.md ==&amp;#41;
     *   subpages:
     *   - name: Java
     *     content: &amp;#40;== include tutorial_java.md ==&amp;#41;
     * &lt;/code&gt;&lt;/pre&gt;
     * You can reference `Java` page using Markdown reference link syntax:
     * `[Java][Tutorial.Java]`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * The Markdown content of the page. You can use &lt;code&gt;&amp;#40;== include {path} ==&amp;#41;&lt;/code&gt;
     * to include content from a Markdown file.
     * </pre>
     *
     * <code>string content = 2;</code>
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * <pre>
     * The Markdown content of the page. You can use &lt;code&gt;&amp;#40;== include {path} ==&amp;#41;&lt;/code&gt;
     * to include content from a Markdown file.
     * </pre>
     *
     * <code>string content = 2;</code>
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;
    }

    /**
     * <pre>
     * Subpages of this page. The order of subpages specified here will be
     * honored in the generated docset.
     * </pre>
     *
     * <code>repeated .google.api.Page subpages = 3;</code>
     */
    public function getSubpages()
    {
        return $this->subpages;
    }

    /**
     * <pre>
     * Subpages of this page. The order of subpages specified here will be
     * honored in the generated docset.
     * </pre>
     *
     * <code>repeated .google.api.Page subpages = 3;</code>
     */
    public function setSubpages(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Page::class);
        $this->subpages = $var;
    }

}
