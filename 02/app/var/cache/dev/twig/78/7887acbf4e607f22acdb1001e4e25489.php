<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'importmap' => [$this, 'block_importmap'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_attr' => [$this, 'block_body_attr'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'javascript_page_color_scheme' => [$this, 'block_javascript_page_color_scheme'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'main_content_wrapper' => [$this, 'block_main_content_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search_wrapper' => [$this, 'block_search_wrapper'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'header_custom_menu_wrapper' => [$this, 'block_header_custom_menu_wrapper'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'settings_dropdown_wrapper' => [$this, 'block_settings_dropdown_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'content_footer' => [$this, 'block_content_footer'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        // line 2
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 3
        $context["__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3);
        // line 4
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "i18n", [], "any", false, false, false, 6), "htmlLocale", [], "any", false, false, false, 6), "html", null, true);
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "i18n", [], "any", false, false, false, 6), "textDirection", [], "any", false, false, false, 6), "html", null, true);
        yield "\" data-turbo=\"false\">
<head>
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('head_metas', $context, $blocks);
        // line 15
        yield "
    ";
        // line 16
        $context["page_title_block_output"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        yield "    <title>";
        yield Twig\Extension\CoreExtension::striptags((isset($context["page_title_block_output"]) || array_key_exists("page_title_block_output", $context) ? $context["page_title_block_output"] : (function () { throw new RuntimeError('Variable "page_title_block_output" does not exist.', 17, $this->source); })()));
        yield "</title>

    ";
        // line 19
        yield from $this->unwrap()->yieldBlock('head_stylesheets', $context, $blocks);
        // line 26
        yield "
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('configured_stylesheets', $context, $blocks);
        // line 31
        yield "
    ";
        // line 32
        yield from $this->unwrap()->yieldBlock('head_favicon', $context, $blocks);
        // line 35
        yield "
    ";
        // line 36
        yield from $this->unwrap()->yieldBlock('head_javascript', $context, $blocks);
        // line 47
        yield "
    ";
        // line 48
        yield from $this->unwrap()->yieldBlock('configured_javascripts', $context, $blocks);
        // line 52
        yield "
    ";
        // line 53
        yield from $this->unwrap()->yieldBlock('configured_head_contents', $context, $blocks);
        // line 58
        yield "</head>

";
        // line 60
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 399
        yield "</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_metas(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_metas"));

        // line 9
        yield "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield from         $this->unwrap()->yieldBlock("content_title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 20
        yield "        ";
        // line 23
        yield "            <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 23, $this->source); })()), "assets", [], "any", false, false, false, 23), "defaultAssetPackageName", [], "any", false, false, false, 23)), "html", null, true);
        yield "\">
        ";
        // line 25
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 28
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 28), "cssAssets", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 28, $this->source); })()), "assets", [], "any", false, false, false, 28), "cssAssets", [], "any", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 28, $this->source); })()), "assets", [], "any", false, false, false, 28), "cssAssets", [], "any", false, false, false, 28)) : ([]))], false);
        yield "
        ";
        // line 29
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 29), "webpackEncoreAssets", [], "any", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 29, $this->source); })()), "assets", [], "any", false, false, false, 29), "webpackEncoreAssets", [], "any", false, false, false, 29)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 29, $this->source); })()), "assets", [], "any", false, false, false, 29), "webpackEncoreAssets", [], "any", false, false, false, 29)) : ([]))], false);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_favicon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 33
        yield "        <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 33, $this->source); })()), "dashboardFaviconPath", [], "any", false, false, false, 33)), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 37
        yield "        ";
        // line 40
        yield "            <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 40, $this->source); })()), "assets", [], "any", false, false, false, 40), "defaultAssetPackageName", [], "any", false, false, false, 40)), "html", null, true);
        yield "\"></script>
        ";
        // line 42
        yield "
        ";
        // line 43
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 46
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        // line 44
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_importmap.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 44), "assetMapperAssets", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 44, $this->source); })()), "assets", [], "any", false, false, false, 44), "assetMapperAssets", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 44, $this->source); })()), "assets", [], "any", false, false, false, 44), "assetMapperAssets", [], "any", false, false, false, 44)) : ([]))], false);
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 49
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 49), "jsAssets", [], "any", true, true, false, 49) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 49, $this->source); })()), "assets", [], "any", false, false, false, 49), "jsAssets", [], "any", false, false, false, 49)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 49, $this->source); })()), "assets", [], "any", false, false, false, 49), "jsAssets", [], "any", false, false, false, 49)) : ([]))], false);
        yield "
        ";
        // line 50
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 50), "webpackEncoreAssets", [], "any", true, true, false, 50) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 50, $this->source); })()), "assets", [], "any", false, false, false, 50), "webpackEncoreAssets", [], "any", false, false, false, 50)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 50, $this->source); })()), "assets", [], "any", false, false, false, 50), "webpackEncoreAssets", [], "any", false, false, false, 50)) : ([]))], false);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 54
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 54), "headContents", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 54, $this->source); })()), "assets", [], "any", false, false, false, 54), "headContents", [], "any", false, false, false, 54)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 54, $this->source); })()), "assets", [], "any", false, false, false, 54), "headContents", [], "any", false, false, false, 54)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 55
            yield "            ";
            yield $context["htmlContent"];
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 61
        yield "    <body ";
        yield from $this->unwrap()->yieldBlock('body_attr', $context, $blocks);
        // line 62
        yield "        id=\"";
        yield from $this->unwrap()->yieldBlock('body_id', $context, $blocks);
        yield "\"
        class=\"ea ";
        // line 63
        yield from $this->unwrap()->yieldBlock('body_class', $context, $blocks);
        yield "\"
        data-ea-content-width=\"";
        // line 64
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 64), "contentWidth", [], "any", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 64, $this->source); })()), "crud", [], "any", false, false, false, 64), "contentWidth", [], "any", false, false, false, 64)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 64, $this->source); })()), "crud", [], "any", false, false, false, 64), "contentWidth", [], "any", false, false, false, 64), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 64, $this->source); })()), "dashboardContentWidth", [], "any", false, false, false, 64)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 64, $this->source); })()), "dashboardContentWidth", [], "any", false, false, false, 64), "html", null, true)) : ("normal"))));
        yield "\"
        data-ea-sidebar-width=\"";
        // line 65
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 65), "sidebarWidth", [], "any", true, true, false, 65) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 65, $this->source); })()), "crud", [], "any", false, false, false, 65), "sidebarWidth", [], "any", false, false, false, 65)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 65, $this->source); })()), "crud", [], "any", false, false, false, 65), "sidebarWidth", [], "any", false, false, false, 65), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 65) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 65, $this->source); })()), "dashboardSidebarWidth", [], "any", false, false, false, 65)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 65, $this->source); })()), "dashboardSidebarWidth", [], "any", false, false, false, 65), "html", null, true)) : ("normal"))));
        yield "\"
        data-ea-dark-scheme-is-enabled=\"";
        // line 66
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 66, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"
        data-ea-default-color-scheme=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 67, $this->source); })()), "dashboardDefaultColorScheme", [], "any", false, false, false, 67), "html", null, true);
        yield "\"
        data-ea-icon-set=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 68, $this->source); })()), "assets", [], "any", false, false, false, 68), "iconSet", [], "any", false, false, false, 68), "html", null, true);
        yield "\"
        data-ea-icon-prefix=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 69, $this->source); })()), "assets", [], "any", false, false, false, 69), "defaultIconPrefix", [], "any", false, false, false, 69), "html", null, true);
        yield "\"
    >
    ";
        // line 71
        yield from $this->unwrap()->yieldBlock('javascript_page_layout', $context, $blocks);
        // line 78
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascript_page_color_scheme', $context, $blocks);
        // line 85
        yield "
    ";
        // line 86
        yield from $this->unwrap()->yieldBlock('wrapper_wrapper', $context, $blocks);
        // line 389
        yield "
    ";
        // line 390
        yield from $this->unwrap()->yieldBlock('body_javascript', $context, $blocks);
        // line 391
        yield "
    ";
        // line 392
        yield from $this->unwrap()->yieldBlock('configured_body_contents', $context, $blocks);
        // line 397
        yield "    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_attr(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attr"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_page_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_layout"));

        // line 72
        yield "        ";
        // line 75
        yield "            <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-layout.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 75, $this->source); })()), "assets", [], "any", false, false, false, 75), "defaultAssetPackageName", [], "any", false, false, false, 75)), "html", null, true);
        yield "\"></script>
        ";
        // line 77
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_page_color_scheme(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_color_scheme"));

        // line 79
        yield "        ";
        // line 82
        yield "            <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-color-scheme.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 82, $this->source); })()), "assets", [], "any", false, false, false, 82), "defaultAssetPackageName", [], "any", false, false, false, 82)), "html", null, true);
        yield "\"></script>
        ";
        // line 84
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 87
        yield "        ";
        yield from $this->unwrap()->yieldBlock('flash_messages', $context, $blocks);
        // line 90
        yield "
        ";
        // line 91
        $context["user_menu_avatar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 92
            yield "            ";
            if ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 92, $this->source); })()), "userMenu", [], "any", false, false, false, 92), "avatarUrl", [], "any", false, false, false, 92))) {
                // line 93
                yield "                <span class=\"user-avatar\">
                    ";
                // line 94
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:user"]);
                yield "
                </span>
            ";
            } else {
                // line 97
                yield "                <img class=\"user-avatar\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 97, $this->source); })()), "userMenu", [], "any", false, false, false, 97), "avatarUrl", [], "any", false, false, false, 97), "html", null, true);
                yield "\" />
            ";
            }
            // line 99
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        yield "
        ";
        // line 101
        $context["user_menu"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 102
            yield "            ";
            yield from $this->unwrap()->yieldBlock('user_menu', $context, $blocks);
            // line 119
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        yield "
        ";
        // line 121
        $context["impersonator_permission"] = ((Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR", null, true)) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 122
        yield "
        ";
        // line 123
        $context["user_menu_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 124
            yield "            ";
            $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v0->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 4991107621);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 4991107621);
                $this->load("@EasyAdmin/layout.html.twig", 124, "4991107621")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
            // line 135
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        yield "
        ";
        // line 137
        $context["settings_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 138
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 138, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 138) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 138, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 138))) {
                // line 139
                yield "                ";
                $_v1 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                $preRendered = $_v1->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings"]));
                if (null !== $preRendered) {
                    yield $preRendered; 
                } else {
                    $preRenderEvent = $_v1->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings"]), $context, "@EasyAdmin/layout.html.twig", 20482372061);
                    $embeddedContext = $preRenderEvent->getVariables();
                    $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                    $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                    $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 20482372061);
                    $this->load("@EasyAdmin/layout.html.twig", 139, "20482372061")->display($embeddedContext, $embeddedBlocks);
                    $_v1->finishEmbedComponent();
                }
                // line 175
                yield "            ";
            }
            // line 176
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 177
        yield "
        <div class=\"wrapper\">
            ";
        // line 179
        yield from $this->unwrap()->yieldBlock('wrapper', $context, $blocks);
        // line 387
        yield "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_flash_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 88
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 88, $this->source); })()), "templatePath", ["flash_messages"], "method", false, false, false, 88));
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_user_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_menu"));

        // line 103
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 103, $this->source); })()), "userMenu", [], "any", false, false, false, 103), "items", [], "any", false, false, false, 103)) > 0)) {
            // line 104
            yield "                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
            yield "

                    ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 106, $this->source); })()), "userMenu", [], "any", false, false, false, 106), "items", [], "any", false, false, false, 106));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 107
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 108
                    yield "                            ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 109
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
                        yield "
                            ";
                    }
                    // line 111
                    yield "
                            ";
                    // line 112
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 112), [],                     // line 3
(isset($context["__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993"]) || array_key_exists("__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993", $context) ? $context["__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993"] : (function () { throw new RuntimeError('Variable "__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993" does not exist.', 3, $this->source); })())), "class" => CoreExtension::getAttribute($this->env, $this->source,                     // line 112
$context["item"], "cssClass", [], "any", false, false, false, 112), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 112), "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 112)]);
                    yield "
                        ";
                } else {
                    // line 114
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 114), [],                     // line 3
(isset($context["__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993"]) || array_key_exists("__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993", $context) ? $context["__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993"] : (function () { throw new RuntimeError('Variable "__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993" does not exist.', 3, $this->source); })())), "class" => ("user-action " . CoreExtension::getAttribute($this->env, $this->source,                     // line 114
$context["item"], "cssClass", [], "any", false, false, false, 114)), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 114), "url" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 114), "target" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 114), "rel" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 114), "referrerpolicy" => "origin-when-cross-origin", "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 114)]);
                    yield "
                        ";
                }
                // line 116
                yield "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "                ";
        }
        // line 118
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        // line 180
        yield "                <div class=\"responsive-header\">
                    ";
        // line 181
        yield from $this->unwrap()->yieldBlock('responsive_header', $context, $blocks);
        // line 209
        yield "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 213
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 235
        yield "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                ";
        // line 239
        yield from $this->unwrap()->yieldBlock('main_content_wrapper', $context, $blocks);
        // line 386
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 181
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_responsive_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header"));

        // line 182
        yield "                        ";
        $_v2 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v2->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["type" => "button", "isInvisible" => true, "icon" => "internal:menu-bars", "id" => "navigation-toggler", "aria-label" => "Toggle navigation"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v2->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["type" => "button", "isInvisible" => true, "icon" => "internal:menu-bars", "id" => "navigation-toggler", "aria-label" => "Toggle navigation"]), $context, "@EasyAdmin/layout.html.twig", 2382640211);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 2382640211);
            $this->load("@EasyAdmin/layout.html.twig", 182, "2382640211")->display($embeddedContext, $embeddedBlocks);
            $_v2->finishEmbedComponent();
        }
        // line 183
        yield "
                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            ";
        // line 185
        yield from $this->unwrap()->yieldBlock('responsive_header_logo', $context, $blocks);
        // line 190
        yield "                        </div>

                        ";
        // line 192
        $_v3 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v3->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("ms-auto user-menu-wrapper " . (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 192, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-is-impersonated") : ("")))]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v3->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("ms-auto user-menu-wrapper " . (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 192, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-is-impersonated") : ("")))]), $context, "@EasyAdmin/layout.html.twig", 3885423561);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 3885423561);
            $this->load("@EasyAdmin/layout.html.twig", 192, "3885423561")->display($embeddedContext, $embeddedBlocks);
            $_v3->finishEmbedComponent();
        }
        // line 206
        yield "
                        ";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["settings_dropdown"]) || array_key_exists("settings_dropdown", $context) ? $context["settings_dropdown"] : (function () { throw new RuntimeError('Variable "settings_dropdown" does not exist.', 207, $this->source); })()), "html", null, true);
        yield "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 185
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_responsive_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header_logo"));

        // line 186
        yield "                                <a class=\"responsive-logo\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 186, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 186)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 186, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 186));
        yield "\">
                                    ";
        // line 187
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 187, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 187);
        yield "
                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 213
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 214
        yield "                            <header class=\"main-header\">
                                ";
        // line 215
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 229
        yield "                            </header>

                            ";
        // line 231
        yield from $this->unwrap()->yieldBlock('main_menu_wrapper', $context, $blocks);
        // line 234
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 216
        yield "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 217
        yield from $this->unwrap()->yieldBlock('header_navbar', $context, $blocks);
        // line 227
        yield "                                </nav>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 217
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navbar"));

        // line 218
        yield "                                        <div id=\"header-logo\">
                                            ";
        // line 219
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 225
        yield "                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 219
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 220
        yield "                                                <a class=\"logo\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 220, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 220)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 220, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 220));
        yield "\">
                                                    <span class=\"logo-custom\">";
        // line 221
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 221, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 221);
        yield "</span>
                                                    <span class=\"logo-compact\">";
        // line 222
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:home"]);
        yield "</span>
                                                </a>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 231
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_menu_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 232
        yield "                                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 232, $this->source); })()), "templatePath", ["main_menu"], "method", false, false, false, 232));
        yield "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_content_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_content_wrapper"));

        // line 240
        yield "                <section class=\"main-content\">
                    ";
        // line 241
        $context["has_search"] = ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 241, $this->source); })()), "crud", [], "any", false, false, false, 241)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 241, $this->source); })()), "crud", [], "any", false, false, false, 241), "isSearchEnabled", [], "any", false, false, false, 241));
        // line 242
        yield "                    <aside class=\"content-top ";
        yield (((($tmp = (isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 242, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ea-search-enabled") : ("ea-search-disabled"));
        yield "\">
                        ";
        // line 243
        yield from $this->unwrap()->yieldBlock('content_top_header', $context, $blocks);
        // line 336
        yield "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 339
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 381
        yield "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 243
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top_header"));

        // line 244
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('search_wrapper', $context, $blocks);
        // line 313
        yield "
                            ";
        // line 314
        yield from $this->unwrap()->yieldBlock('header_custom_menu_wrapper', $context, $blocks);
        // line 331
        yield "
                            ";
        // line 332
        yield from $this->unwrap()->yieldBlock('settings_dropdown_wrapper', $context, $blocks);
        // line 335
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 244
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_wrapper"));

        // line 245
        yield "                            <div class=\"content-search\">
                                ";
        // line 246
        if ((($tmp = (isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 246, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 247
            yield "                                    ";
            yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
            // line 310
            yield "                                ";
        }
        // line 311
        yield "                            </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 247
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 248
        yield "                                        ";
        $context["formActionUrl"] = null;
        // line 249
        yield "                                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 249, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 250
            yield "                                            ";
            // line 251
            yield "                                            ";
            $context["crudController"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 251), "attributes", [], "any", false, true, false, 251), "get", ["crudControllerFqcn"], "method", true, true, false, 251) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 251, $this->source); })()), "request", [], "any", false, false, false, 251), "attributes", [], "any", false, false, false, 251), "get", ["crudControllerFqcn"], "method", false, false, false, 251)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 251, $this->source); })()), "request", [], "any", false, false, false, 251), "attributes", [], "any", false, false, false, 251), "get", ["crudControllerFqcn"], "method", false, false, false, 251)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 251, $this->source); })()), "request", [], "any", false, false, false, 251), "query", [], "any", false, false, false, 251), "get", ["crudControllerFqcn"], "method", false, false, false, 251)));
            // line 252
            yield "                                            ";
            $context["formActionUrl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [(isset($context["crudController"]) || array_key_exists("crudController", $context) ? $context["crudController"] : (function () { throw new RuntimeError('Variable "crudController" does not exist.', 252, $this->source); })())], "method", false, false, false, 252), "setAction", ["index"], "method", false, false, false, 252), "set", ["page", 1], "method", false, false, false, 252);
            // line 253
            yield "                                        ";
        }
        // line 254
        yield "                                        <form class=\"form-action-search\" method=\"get\" ";
        if ((($tmp = (isset($context["formActionUrl"]) || array_key_exists("formActionUrl", $context) ? $context["formActionUrl"] : (function () { throw new RuntimeError('Variable "formActionUrl" does not exist.', 254, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formActionUrl"]) || array_key_exists("formActionUrl", $context) ? $context["formActionUrl"] : (function () { throw new RuntimeError('Variable "formActionUrl" does not exist.', 254, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
                                            ";
        // line 255
        yield from $this->unwrap()->yieldBlock('search_form', $context, $blocks);
        // line 308
        yield "                                        </form>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 255
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 256
        yield "                                                ";
        yield from $this->unwrap()->yieldBlock('search_form_filters', $context, $blocks);
        // line 281
        yield "
                                                ";
        // line 282
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 282, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 283
            yield "                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 284, $this->source); })()), "request", [], "any", false, false, false, 284), "query", [], "any", false, false, false, 284), "get", ["crudControllerFqcn"], "method", false, false, false, 284), "html", null, true);
            yield "\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                ";
        }
        // line 287
        yield "
                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        ";
        // line 290
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:search", "class" => "content-search-icon"]);
        yield "

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 292, $this->source); })()), "request", [], "any", false, false, false, 292), "query", [], "any", false, false, false, 292), "get", ["query"], "method", false, false, false, 292), "html", null, true);
        yield "\">
                                                            <input class=\"form-control ";
        // line 293
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "request", [], "any", false, false, false, 293), "query", [], "any", false, false, false, 293), "get", ["query"], "method", false, false, false, 293))) ? ("is-blank") : (""));
        yield "\" type=\"search\" name=\"query\" value=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 293), "query", [], "any", false, true, false, 293), "get", ["query"], "method", true, true, false, 293) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "request", [], "any", false, false, false, 293), "query", [], "any", false, false, false, 293), "get", ["query"], "method", false, false, false, 293)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "request", [], "any", false, false, false, 293), "query", [], "any", false, false, false, 293), "get", ["query"], "method", false, false, false, 293), "html", null, true)) : (""));
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.search", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 293, $this->source); })()), "i18n", [], "any", false, false, false, 293), "translationParameters", [], "any", false, false, false, 293), "EasyAdminBundle"), [],         // line 3
(isset($context["__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993"]) || array_key_exists("__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993", $context) ? $context["__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993"] : (function () { throw new RuntimeError('Variable "__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993" does not exist.', 3, $this->source); })())), "html", null, true);
        // line 293
        yield "\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 293, $this->source); })()), "crud", [], "any", false, false, false, 293), "currentAction", [], "any", false, false, false, 293) == "index") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 293, $this->source); })()), "crud", [], "any", false, false, false, 293), "autofocusSearch", [], "any", false, false, false, 293) == true))) {
            yield " autofocus=\"autofocus\"";
        }
        yield ">
                                                        </label>

                                                        ";
        // line 296
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 296, $this->source); })()), "request", [], "any", false, false, false, 296), "query", [], "any", false, false, false, 296), "get", ["query"], "method", false, false, false, 296)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 297
            yield "                                                            ";
            $context["search_reset_url"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 297);
            // line 298
            yield "                                                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 298, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 298)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 299
                yield "                                                                ";
                $context["search_reset_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 299), "setController", [(isset($context["crudController"]) || array_key_exists("crudController", $context) ? $context["crudController"] : (function () { throw new RuntimeError('Variable "crudController" does not exist.', 299, $this->source); })())], "method", false, false, false, 299), "setAction", ["index"], "method", false, false, false, 299), "set", ["page", 1], "method", false, false, false, 299);
                // line 300
                yield "                                                            ";
            }
            // line 301
            yield "                                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_reset_url"]) || array_key_exists("search_reset_url", $context) ? $context["search_reset_url"] : (function () { throw new RuntimeError('Variable "search_reset_url" does not exist.', 301, $this->source); })()), "html", null, true);
            yield "\" class=\"content-search-reset\">
                                                                ";
            // line 302
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:xmark"]);
            yield "
                                                            </a>
                                                        ";
        }
        // line 305
        yield "                                                    </div>
                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 256
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_form_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form_filters"));

        // line 257
        yield "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 257, $this->source); })()), "search", [], "any", false, false, false, 257), "appliedFilters", [], "any", false, false, false, 257));
        foreach ($context['_seq'] as $context["field"] => $context["fieldValue"]) {
            // line 258
            yield "                                                        ";
            if (is_iterable($context["fieldValue"])) {
                // line 259
                yield "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["fieldValue"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 260
                    yield "                                                                ";
                    // line 261
                    yield "                                                                ";
                    if (is_iterable($context["value"])) {
                        // line 262
                        yield "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["value"]);
                        foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                            // line 263
                            yield "                                                                        ";
                            // line 264
                            yield "                                                                        ";
                            if (is_iterable($context["iterValue"])) {
                                // line 265
                                yield "                                                                            ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable($context["iterValue"]);
                                foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                    // line 266
                                    yield "                                                                                <input type=\"hidden\" name=\"filters[";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                                    yield "][";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                                    yield "][";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index"], "html", null, true);
                                    yield "][";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["subIndex"], "html", null, true);
                                    yield "]\" value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["subIterValue"], "html", null, true);
                                    yield "\">
                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['subIndex'], $context['subIterValue'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 268
                                yield "                                                                        ";
                            } else {
                                // line 269
                                yield "                                                                            <input type=\"hidden\" name=\"filters[";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                                yield "][";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                                yield "][";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index"], "html", null, true);
                                yield "]\" value=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["iterValue"], "html", null, true);
                                yield "\">
                                                                        ";
                            }
                            // line 271
                            yield "                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['index'], $context['iterValue'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 272
                        yield "                                                                ";
                    } else {
                        // line 273
                        yield "                                                                    <input type=\"hidden\" name=\"filters[";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                        yield "][";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "]\" value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\">
                                                                ";
                    }
                    // line 275
                    yield "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 276
                yield "                                                        ";
            } else {
                // line 277
                yield "                                                            <input type=\"hidden\" name=\"filters[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                yield "]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldValue"], "html", null, true);
                yield "\">
                                                        ";
            }
            // line 279
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['field'], $context['fieldValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        yield "                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 314
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_custom_menu_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu_wrapper"));

        // line 315
        yield "                            <div class=\"navbar-custom-menu\">
                                ";
        // line 316
        yield from $this->unwrap()->yieldBlock('header_custom_menu', $context, $blocks);
        // line 329
        yield "                            </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 316
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_custom_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 317
        yield "                                    ";
        $_v4 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v4->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("user-menu-wrapper " . (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 317, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-is-impersonated") : ("")))]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v4->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("user-menu-wrapper " . (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 317, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-is-impersonated") : ("")))]), $context, "@EasyAdmin/layout.html.twig", 28877141731);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 28877141731);
            $this->load("@EasyAdmin/layout.html.twig", 317, "28877141731")->display($embeddedContext, $embeddedBlocks);
            $_v4->finishEmbedComponent();
        }
        // line 328
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 332
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_settings_dropdown_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "settings_dropdown_wrapper"));

        // line 333
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["settings_dropdown"]) || array_key_exists("settings_dropdown", $context) ? $context["settings_dropdown"] : (function () { throw new RuntimeError('Variable "settings_dropdown" does not exist.', 333, $this->source); })()), "html", null, true);
        yield "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 339
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 340
        yield "                            <article class=\"content\">
                                ";
        // line 341
        yield from $this->unwrap()->yieldBlock('content_header_wrapper', $context, $blocks);
        // line 367
        yield "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 369
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 370
        yield "                                </section>

                                ";
        // line 372
        yield from $this->unwrap()->yieldBlock('content_footer_wrapper', $context, $blocks);
        // line 379
        yield "                            </article>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 341
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        // line 342
        yield "                                    ";
        $context["crud_help_message"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 342), "helpMessage", [], "any", true, true, false, 342) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 342, $this->source); })()), "crud", [], "any", false, false, false, 342), "helpMessage", [], "any", false, false, false, 342)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 342, $this->source); })()), "crud", [], "any", false, false, false, 342), "helpMessage", [], "any", false, false, false, 342)) : (null));
        // line 343
        yield "                                    ";
        // line 344
        yield "                                    ";
        $context["has_help_message"] = (( !((isset($context["crud_help_message"]) || array_key_exists("crud_help_message", $context) ? $context["crud_help_message"] : (function () { throw new RuntimeError('Variable "crud_help_message" does not exist.', 344, $this->source); })()) === false) &&  !(null === (isset($context["crud_help_message"]) || array_key_exists("crud_help_message", $context) ? $context["crud_help_message"] : (function () { throw new RuntimeError('Variable "crud_help_message" does not exist.', 344, $this->source); })()))) &&  !((isset($context["crud_help_message"]) || array_key_exists("crud_help_message", $context) ? $context["crud_help_message"] : (function () { throw new RuntimeError('Variable "crud_help_message" does not exist.', 344, $this->source); })()) === ""));
        // line 345
        yield "                                    <section class=\"content-header\">
                                        ";
        // line 346
        yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
        // line 365
        yield "                                    </section>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 346
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 347
        yield "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 349
        yield from $this->unwrap()->yieldBlock('content_title', $context, $blocks);
        // line 350
        yield "
                                                    ";
        // line 351
        yield from $this->unwrap()->yieldBlock('content_help', $context, $blocks);
        // line 358
        yield "                                                </h1>
                                            </div>

                                            ";
        // line 361
        yield from $this->unwrap()->yieldBlock('page_actions_wrapper', $context, $blocks);
        // line 364
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 349
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 351
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_help"));

        // line 352
        yield "                                                        ";
        if ((($tmp = (isset($context["has_help_message"]) || array_key_exists("has_help_message", $context) ? $context["has_help_message"] : (function () { throw new RuntimeError('Variable "has_help_message" does not exist.', 352, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 353
            yield "                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 353, $this->source); })()), "crud", [], "any", false, false, false, 353), "helpMessage", [], "any", false, false, false, 353), [],             // line 3
(isset($context["__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993"]) || array_key_exists("__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993", $context) ? $context["__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993"] : (function () { throw new RuntimeError('Variable "__internal_5cd0a583d99152b622704dd05f98903162d3e6a1b45c8e2f163dd812eb47c993" does not exist.', 3, $this->source); })())), "html");
            // line 353
            yield "\">
                                                                ";
            // line 354
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:circle-info"]);
            yield "
                                                            </a>
                                                        ";
        }
        // line 357
        yield "                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 361
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        // line 362
        yield "                                                <div class=\"page-actions\">";
        yield from $this->unwrap()->yieldBlock('page_actions', $context, $blocks);
        yield "</div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 369
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 372
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        // line 373
        yield "                                    ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(        $this->unwrap()->renderBlock("content_footer", $context, $blocks))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 374
            yield "                                        <section class=\"content-footer\">
                                            ";
            // line 375
            yield from $this->unwrap()->yieldBlock('content_footer', $context, $blocks);
            // line 376
            yield "                                        </section>
                                    ";
        }
        // line 378
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 375
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 390
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 392
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 393
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 393), "bodyContents", [], "any", true, true, false, 393) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 393, $this->source); })()), "assets", [], "any", false, false, false, 393), "bodyContents", [], "any", false, false, false, 393)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 393, $this->source); })()), "assets", [], "any", false, false, false, 393), "bodyContents", [], "any", false, false, false, 393)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 394
            yield "            ";
            yield $context["htmlContent"];
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___4991107621 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 124
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 124, $this->source); })()), 124);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v5 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v5->preRender("ea:ActionMenu:ActionList:Content", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-user-details"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v5->startEmbedComponent("ea:ActionMenu:ActionList:Content", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-user-details"]), $context, "@EasyAdmin/layout.html.twig", 17905018841);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 17905018841);
            $this->load("@EasyAdmin/layout.html.twig", 125, "17905018841")->display($embeddedContext, $embeddedBlocks);
            $_v5->finishEmbedComponent();
        }
        // line 132
        yield "
                ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu"]) || array_key_exists("user_menu", $context) ? $context["user_menu"] : (function () { throw new RuntimeError('Variable "user_menu" does not exist.', 133, $this->source); })()), "html", null, true);
        yield "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___17905018841 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 125
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 125, $this->source); })()), 125);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield "<div>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 126, $this->source); })()), "html", null, true);
        yield "</div>
                    <div>
                        <span class=\"user-label\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", [], "EasyAdminBundle"), "html", null, true);
        yield "</span>
                        <span class=\"user-name\">";
        // line 129
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", [], "EasyAdminBundle"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 129, $this->source); })()), "userMenu", [], "any", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true)));
        yield "</span>
                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  2822 => 129,  2818 => 128,  2803 => 126,  2772 => 125,  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___20482372061 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 139
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 139, $this->source); })()), 139);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v6 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v6->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings-button", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v6->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings-button", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/layout.html.twig", 12840266131);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 12840266131);
            $this->load("@EasyAdmin/layout.html.twig", 140, "12840266131")->display($embeddedContext, $embeddedBlocks);
            $_v6->finishEmbedComponent();
        }
        // line 143
        yield "
                    ";
        // line 144
        $_v7 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v7->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v7->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 12733288761);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 12733288761);
            $this->load("@EasyAdmin/layout.html.twig", 144, "12733288761")->display($embeddedContext, $embeddedBlocks);
            $_v7->finishEmbedComponent();
        }
        // line 174
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  3357 => 174,  3343 => 144,  3340 => 143,  3317 => 140,  3286 => 139,  2822 => 129,  2818 => 128,  2803 => 126,  2772 => 125,  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___12840266131 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 140
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 140, $this->source); })()), 140);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:gear"]);
        yield "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  3849 => 141,  3818 => 140,  3357 => 174,  3343 => 144,  3340 => 143,  3317 => 140,  3286 => 139,  2822 => 129,  2818 => 128,  2803 => 126,  2772 => 125,  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___12733288761 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 144
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 144, $this->source); })()), 144);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v8 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v8->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v8->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 10214616261);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 10214616261);
            $this->load("@EasyAdmin/layout.html.twig", 145, "10214616261")->display($embeddedContext, $embeddedBlocks);
            $_v8->finishEmbedComponent();
        }
        // line 173
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  4375 => 173,  4352 => 145,  4321 => 144,  3849 => 141,  3818 => 140,  3357 => 174,  3343 => 144,  3340 => 143,  3317 => 140,  3286 => 139,  2822 => 129,  2818 => 128,  2803 => 126,  2772 => 125,  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___10214616261 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 145
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 145, $this->source); })()), 145);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 146, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 147
            yield "                                ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["class" => "dropdown-locales-label", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.locale", [], "EasyAdminBundle")]);
            yield "
                            ";
        }
        // line 149
        yield "
                            ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 150, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 150));
        foreach ($context['_seq'] as $context["_key"] => $context["localeDto"]) {
            // line 151
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 151, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 152
                yield "                                    ";
                // line 153
                yield "                                    ";
                $context["current_route_params"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "request", [], "any", false, false, false, 153), "attributes", [], "any", false, false, false, 153), "get", ["_route_params"], "method", false, false, false, 153);
                // line 154
                yield "                                    ";
                $context["url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator((isset($context["current_route_params"]) || array_key_exists("current_route_params", $context) ? $context["current_route_params"] : (function () { throw new RuntimeError('Variable "current_route_params" does not exist.', 154, $this->source); })())), "set", ["_locale", CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 154)], "method", false, false, false, 154), "set", ["entityId", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "request", [], "any", false, false, false, 154), "attributes", [], "any", false, false, false, 154), "get", ["entityId"], "method", false, false, false, 154)], "method", false, false, false, 154);
                // line 155
                yield "                                ";
            } else {
                // line 156
                yield "                                    ";
                $context["url"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["_locale", CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 156)], "method", false, false, false, 156);
                // line 157
                yield "                                ";
            }
            // line 158
            yield "                                ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "request", [], "any", false, false, false, 158), "locale", [], "any", false, false, false, 158) == CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 158))) ? ("active") : ("")), "url" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 158, $this->source); })()), "generateUrl", [], "method", false, false, false, 158), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 158), "label" => CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "name", [], "any", false, false, false, 158)]);
            yield "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['localeDto'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        yield "
                            ";
        // line 161
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 161, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 162, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 163
                yield "                                    ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
                yield "
                                ";
            }
            // line 165
            yield "
                                ";
            // line 166
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["class" => "dropdown-appearance-label", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", [], "EasyAdminBundle")]);
            yield "

                                ";
            // line 168
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => "dropdown-appearance-item", "url" => "#", "icon" => "internal:sun", "data-ea-color-scheme" => "light", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", [], "EasyAdminBundle")]);
            yield "
                                ";
            // line 169
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => "dropdown-appearance-item", "url" => "#", "icon" => "internal:moon", "data-ea-color-scheme" => "dark", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", [], "EasyAdminBundle")]);
            yield "
                                ";
            // line 170
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => "dropdown-appearance-item active", "url" => "#", "icon" => "internal:desktop", "data-ea-color-scheme" => "auto", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", [], "EasyAdminBundle")]);
            yield "
                            ";
        }
        // line 172
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  4955 => 172,  4950 => 170,  4946 => 169,  4942 => 168,  4937 => 166,  4934 => 165,  4928 => 163,  4925 => 162,  4923 => 161,  4920 => 160,  4911 => 158,  4908 => 157,  4905 => 156,  4902 => 155,  4899 => 154,  4896 => 153,  4894 => 152,  4891 => 151,  4887 => 150,  4884 => 149,  4878 => 147,  4867 => 146,  4836 => 145,  4375 => 173,  4352 => 145,  4321 => 144,  3849 => 141,  3818 => 140,  3357 => 174,  3343 => 144,  3340 => 143,  3317 => 140,  3286 => 139,  2822 => 129,  2818 => 128,  2803 => 126,  2772 => 125,  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___2382640211 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 182
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 182, $this->source); })()), 182);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  5415 => 182,  4955 => 172,  4950 => 170,  4946 => 169,  4942 => 168,  4937 => 166,  4934 => 165,  4928 => 163,  4925 => 162,  4923 => 161,  4920 => 160,  4911 => 158,  4908 => 157,  4905 => 156,  4902 => 155,  4899 => 154,  4896 => 153,  4894 => 152,  4891 => 151,  4887 => 150,  4884 => 149,  4878 => 147,  4867 => 146,  4836 => 145,  4375 => 173,  4352 => 145,  4321 => 144,  3849 => 141,  3818 => 140,  3357 => 174,  3343 => 144,  3340 => 143,  3317 => 140,  3286 => 139,  2822 => 129,  2818 => 128,  2803 => 126,  2772 => 125,  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___3885423561 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 192
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 192, $this->source); })()), 192);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 193
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v9 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v9->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v9->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/layout.html.twig", 16137336341);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 16137336341);
            $this->load("@EasyAdmin/layout.html.twig", 193, "16137336341")->display($embeddedContext, $embeddedBlocks);
            $_v9->finishEmbedComponent();
        }
        // line 202
        yield "                            ";
        $_v10 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v10->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v10->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 32996501801);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 32996501801);
            $this->load("@EasyAdmin/layout.html.twig", 202, "32996501801")->display($embeddedContext, $embeddedBlocks);
            $_v10->finishEmbedComponent();
        }
        // line 205
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  5968 => 205,  5953 => 202,  5930 => 193,  5899 => 192,  5415 => 182,  4955 => 172,  4950 => 170,  4946 => 169,  4942 => 168,  4937 => 166,  4934 => 165,  4928 => 163,  4925 => 162,  4923 => 161,  4920 => 160,  4911 => 158,  4908 => 157,  4905 => 156,  4902 => 155,  4899 => 154,  4896 => 153,  4894 => 152,  4891 => 151,  4887 => 150,  4884 => 149,  4878 => 147,  4867 => 146,  4836 => 145,  4375 => 173,  4352 => 145,  4321 => 144,  3849 => 141,  3818 => 140,  3357 => 174,  3343 => 144,  3340 => 143,  3317 => 140,  3286 => 139,  2822 => 129,  2818 => 128,  2803 => 126,  2772 => 125,  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___16137336341 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 193
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 193, $this->source); })()), 193);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 196
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 196, $this->source); })()), "userMenu", [], "any", false, false, false, 196), "avatarDisplayed", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 197
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 197, $this->source); })()), "html", null, true);
            yield "
                                ";
        } else {
            // line 199
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["class" => "user-avatar", "name" => (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 199, $this->source); })()), "user", [], "any", false, false, false, 199))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("internal:user") : ("internal:user-xmark"))]);
            yield "
                                ";
        }
        // line 201
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  6483 => 201,  6477 => 199,  6471 => 197,  6460 => 196,  6429 => 193,  5968 => 205,  5953 => 202,  5930 => 193,  5899 => 192,  5415 => 182,  4955 => 172,  4950 => 170,  4946 => 169,  4942 => 168,  4937 => 166,  4934 => 165,  4928 => 163,  4925 => 162,  4923 => 161,  4920 => 160,  4911 => 158,  4908 => 157,  4905 => 156,  4902 => 155,  4899 => 154,  4896 => 153,  4894 => 152,  4891 => 151,  4887 => 150,  4884 => 149,  4878 => 147,  4867 => 146,  4836 => 145,  4375 => 173,  4352 => 145,  4321 => 144,  3849 => 141,  3818 => 140,  3357 => 174,  3343 => 144,  3340 => 143,  3317 => 140,  3286 => 139,  2822 => 129,  2818 => 128,  2803 => 126,  2772 => 125,  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___32996501801 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 202
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 202, $this->source); })()), 202);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 203
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 203, $this->source); })()), "html", null, true);
        yield "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  6975 => 203,  6944 => 202,  6483 => 201,  6477 => 199,  6471 => 197,  6460 => 196,  6429 => 193,  5968 => 205,  5953 => 202,  5930 => 193,  5899 => 192,  5415 => 182,  4955 => 172,  4950 => 170,  4946 => 169,  4942 => 168,  4937 => 166,  4934 => 165,  4928 => 163,  4925 => 162,  4923 => 161,  4920 => 160,  4911 => 158,  4908 => 157,  4905 => 156,  4902 => 155,  4899 => 154,  4896 => 153,  4894 => 152,  4891 => 151,  4887 => 150,  4884 => 149,  4878 => 147,  4867 => 146,  4836 => 145,  4375 => 173,  4352 => 145,  4321 => 144,  3849 => 141,  3818 => 140,  3357 => 174,  3343 => 144,  3340 => 143,  3317 => 140,  3286 => 139,  2822 => 129,  2818 => 128,  2803 => 126,  2772 => 125,  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___28877141731 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 317
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 317, $this->source); })()), 317);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 318
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v11 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v11->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v11->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/layout.html.twig", 10171251001);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 10171251001);
            $this->load("@EasyAdmin/layout.html.twig", 318, "10171251001")->display($embeddedContext, $embeddedBlocks);
            $_v11->finishEmbedComponent();
        }
        // line 324
        yield "                                        ";
        $_v12 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v12->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v12->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 5071849001);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 5071849001);
            $this->load("@EasyAdmin/layout.html.twig", 324, "5071849001")->display($embeddedContext, $embeddedBlocks);
            $_v12->finishEmbedComponent();
        }
        // line 327
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  7516 => 327,  7501 => 324,  7478 => 318,  7447 => 317,  6975 => 203,  6944 => 202,  6483 => 201,  6477 => 199,  6471 => 197,  6460 => 196,  6429 => 193,  5968 => 205,  5953 => 202,  5930 => 193,  5899 => 192,  5415 => 182,  4955 => 172,  4950 => 170,  4946 => 169,  4942 => 168,  4937 => 166,  4934 => 165,  4928 => 163,  4925 => 162,  4923 => 161,  4920 => 160,  4911 => 158,  4908 => 157,  4905 => 156,  4902 => 155,  4899 => 154,  4896 => 153,  4894 => 152,  4891 => 151,  4887 => 150,  4884 => 149,  4878 => 147,  4867 => 146,  4836 => 145,  4375 => 173,  4352 => 145,  4321 => 144,  3849 => 141,  3818 => 140,  3357 => 174,  3343 => 144,  3340 => 143,  3317 => 140,  3286 => 139,  2822 => 129,  2818 => 128,  2803 => 126,  2772 => 125,  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___10171251001 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 318
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 318, $this->source); })()), 318);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 319
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 319, $this->source); })()), "html", null, true);
        yield "
                                            ";
        // line 320
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 320, $this->source); })()), "userMenu", [], "any", false, false, false, 320), "isNameDisplayed", [], "any", false, false, false, 320)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 321
            yield "                                                <span class=\"user-name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 321, $this->source); })()), "userMenu", [], "any", false, false, false, 321), "name", [], "any", false, false, false, 321), "html", null, true);
            yield "</span>
                                            ";
        }
        // line 323
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  8029 => 323,  8023 => 321,  8021 => 320,  8008 => 319,  7977 => 318,  7516 => 327,  7501 => 324,  7478 => 318,  7447 => 317,  6975 => 203,  6944 => 202,  6483 => 201,  6477 => 199,  6471 => 197,  6460 => 196,  6429 => 193,  5968 => 205,  5953 => 202,  5930 => 193,  5899 => 192,  5415 => 182,  4955 => 172,  4950 => 170,  4946 => 169,  4942 => 168,  4937 => 166,  4934 => 165,  4928 => 163,  4925 => 162,  4923 => 161,  4920 => 160,  4911 => 158,  4908 => 157,  4905 => 156,  4902 => 155,  4899 => 154,  4896 => 153,  4894 => 152,  4891 => 151,  4887 => 150,  4884 => 149,  4878 => 147,  4867 => 146,  4836 => 145,  4375 => 173,  4352 => 145,  4321 => 144,  3849 => 141,  3818 => 140,  3357 => 174,  3343 => 144,  3340 => 143,  3317 => 140,  3286 => 139,  2822 => 129,  2818 => 128,  2803 => 126,  2772 => 125,  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_2d3b90a7e35e5d8e0ca99c5edfc48938___5071849001 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 324
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 324, $this->source); })()), 324);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 325
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 325, $this->source); })()), "html", null, true);
        yield "
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  8521 => 325,  8490 => 324,  8029 => 323,  8023 => 321,  8021 => 320,  8008 => 319,  7977 => 318,  7516 => 327,  7501 => 324,  7478 => 318,  7447 => 317,  6975 => 203,  6944 => 202,  6483 => 201,  6477 => 199,  6471 => 197,  6460 => 196,  6429 => 193,  5968 => 205,  5953 => 202,  5930 => 193,  5899 => 192,  5415 => 182,  4955 => 172,  4950 => 170,  4946 => 169,  4942 => 168,  4937 => 166,  4934 => 165,  4928 => 163,  4925 => 162,  4923 => 161,  4920 => 160,  4911 => 158,  4908 => 157,  4905 => 156,  4902 => 155,  4899 => 154,  4896 => 153,  4894 => 152,  4891 => 151,  4887 => 150,  4884 => 149,  4878 => 147,  4867 => 146,  4836 => 145,  4375 => 173,  4352 => 145,  4321 => 144,  3849 => 141,  3818 => 140,  3357 => 174,  3343 => 144,  3340 => 143,  3317 => 140,  3286 => 139,  2822 => 129,  2818 => 128,  2803 => 126,  2772 => 125,  2309 => 133,  2306 => 132,  2283 => 125,  2252 => 124,  1791 => 396,  1782 => 394,  1777 => 393,  1767 => 392,  1751 => 390,  1735 => 375,  1727 => 378,  1723 => 376,  1721 => 375,  1718 => 374,  1715 => 373,  1705 => 372,  1689 => 369,  1663 => 362,  1653 => 361,  1645 => 357,  1639 => 354,  1636 => 353,  1634 => 3,  1632 => 353,  1629 => 352,  1619 => 351,  1603 => 349,  1595 => 364,  1593 => 361,  1588 => 358,  1586 => 351,  1583 => 350,  1581 => 349,  1577 => 347,  1567 => 346,  1558 => 365,  1556 => 346,  1553 => 345,  1550 => 344,  1548 => 343,  1545 => 342,  1535 => 341,  1526 => 379,  1524 => 372,  1520 => 370,  1518 => 369,  1514 => 367,  1512 => 341,  1509 => 340,  1499 => 339,  1488 => 333,  1478 => 332,  1470 => 328,  1455 => 317,  1445 => 316,  1436 => 329,  1434 => 316,  1431 => 315,  1421 => 314,  1413 => 280,  1407 => 279,  1399 => 277,  1396 => 276,  1390 => 275,  1380 => 273,  1377 => 272,  1371 => 271,  1359 => 269,  1356 => 268,  1339 => 266,  1334 => 265,  1331 => 264,  1329 => 263,  1324 => 262,  1321 => 261,  1319 => 260,  1314 => 259,  1311 => 258,  1306 => 257,  1296 => 256,  1286 => 305,  1280 => 302,  1275 => 301,  1272 => 300,  1269 => 299,  1266 => 298,  1263 => 297,  1261 => 296,  1252 => 293,  1250 => 3,  1245 => 293,  1241 => 292,  1236 => 290,  1231 => 287,  1225 => 284,  1222 => 283,  1220 => 282,  1217 => 281,  1214 => 256,  1204 => 255,  1195 => 308,  1193 => 255,  1184 => 254,  1181 => 253,  1178 => 252,  1175 => 251,  1173 => 250,  1170 => 249,  1167 => 248,  1157 => 247,  1148 => 311,  1145 => 310,  1142 => 247,  1140 => 246,  1137 => 245,  1127 => 244,  1119 => 335,  1117 => 332,  1114 => 331,  1112 => 314,  1109 => 313,  1106 => 244,  1096 => 243,  1084 => 381,  1082 => 339,  1077 => 336,  1075 => 243,  1070 => 242,  1068 => 241,  1065 => 240,  1055 => 239,  1044 => 232,  1034 => 231,  1023 => 222,  1019 => 221,  1012 => 220,  1002 => 219,  993 => 225,  991 => 219,  988 => 218,  978 => 217,  969 => 227,  967 => 217,  964 => 216,  954 => 215,  946 => 234,  944 => 231,  940 => 229,  938 => 215,  935 => 214,  925 => 213,  914 => 187,  907 => 186,  897 => 185,  887 => 207,  884 => 206,  870 => 192,  866 => 190,  864 => 185,  860 => 183,  845 => 182,  835 => 181,  827 => 386,  825 => 239,  819 => 235,  817 => 213,  811 => 209,  809 => 181,  806 => 180,  796 => 179,  788 => 118,  785 => 117,  771 => 116,  766 => 114,  765 => 3,  763 => 114,  758 => 112,  757 => 3,  756 => 112,  753 => 111,  747 => 109,  744 => 108,  741 => 107,  724 => 106,  718 => 104,  715 => 103,  705 => 102,  694 => 88,  684 => 87,  675 => 387,  673 => 179,  669 => 177,  665 => 176,  662 => 175,  647 => 139,  644 => 138,  642 => 137,  639 => 136,  635 => 135,  620 => 124,  618 => 123,  615 => 122,  613 => 121,  610 => 120,  606 => 119,  603 => 102,  601 => 101,  598 => 100,  594 => 99,  588 => 97,  582 => 94,  579 => 93,  576 => 92,  574 => 91,  571 => 90,  568 => 87,  558 => 86,  550 => 84,  545 => 82,  543 => 79,  533 => 78,  525 => 77,  520 => 75,  518 => 72,  508 => 71,  492 => 63,  476 => 62,  460 => 61,  451 => 397,  449 => 392,  446 => 391,  444 => 390,  441 => 389,  439 => 86,  436 => 85,  433 => 78,  431 => 71,  426 => 69,  422 => 68,  418 => 67,  414 => 66,  410 => 65,  406 => 64,  402 => 63,  397 => 62,  394 => 61,  384 => 60,  376 => 57,  367 => 55,  362 => 54,  352 => 53,  342 => 50,  337 => 49,  327 => 48,  316 => 44,  306 => 43,  298 => 46,  296 => 43,  293 => 42,  288 => 40,  286 => 37,  276 => 36,  265 => 33,  255 => 32,  245 => 29,  240 => 28,  230 => 27,  222 => 25,  217 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 399,  154 => 60,  150 => 58,  148 => 53,  145 => 52,  143 => 48,  140 => 47,  138 => 36,  135 => 35,  133 => 32,  130 => 31,  128 => 27,  125 => 26,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        {% guard function csp_nonce %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('style') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
        {% endguard %}
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea.assets.cssAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', {assets: ea.assets.assetMapperAssets ?? []}, with_context: false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea.assets.jsAssets ?? []}, with_context: false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea.assets.webpackEncoreAssets ?? []}, with_context: false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        {% guard function csp_nonce %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\" nonce=\"{{ csp_nonce('script') }}\"></script>
        {% else %}
            <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
        {% endguard %}
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain: 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain: 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {# TODO symfony>=6.4 app.current_route_parameters #}
                                    {% set current_route_params = app.request.attributes.get('_route_params') %}
                                    {% set url = ea_url(current_route_params).set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain: 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain: 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain: 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        {% component 'ea:Button' with { type: 'button', isInvisible: true, icon: 'internal:menu-bars', id: 'navigation-toggler', 'aria-label': 'Toggle navigation' } %}{% endcomponent %}

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set crud_help_message = ea.crud.helpMessage ?? null %}
                                    {# don't use 'crud_help_message is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                                    {% set has_help_message = crud_help_message is not same as(false) and crud_help_message is not null and crud_help_message is not same as('') %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}
