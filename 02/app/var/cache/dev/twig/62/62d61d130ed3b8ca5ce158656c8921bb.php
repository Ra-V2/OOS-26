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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_60bcabcecb95793ba393a9f4cdebf89c extends Template
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

        // line 2
        $_trait_0 = $this->load("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", 2);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_row' => [$this, 'block_collection_entry_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_crud_widget_fieldsets' => [$this, 'block_ea_crud_widget_fieldsets'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_form_row_row' => [$this, 'block_ea_form_row_row'],
                'ea_form_column_group_open_row' => [$this, 'block_ea_form_column_group_open_row'],
                'ea_form_column_group_close_row' => [$this, 'block_ea_form_column_group_close_row'],
                'ea_form_column_open_row' => [$this, 'block_ea_form_column_open_row'],
                'ea_form_column_close_row' => [$this, 'block_ea_form_column_close_row'],
                'ea_form_fieldset_open_ealabel' => [$this, 'block_ea_form_fieldset_open_ealabel'],
                'ea_form_fieldset_open_label' => [$this, 'block_ea_form_fieldset_open_label'],
                'ea_form_fieldset_open_row' => [$this, 'block_ea_form_fieldset_open_row'],
                'ea_form_fieldset_close_row' => [$this, 'block_ea_form_fieldset_close_row'],
                'ea_form_tablist_row' => [$this, 'block_ea_form_tablist_row'],
                'ea_form_tabpane_group_open_row' => [$this, 'block_ea_form_tabpane_group_open_row'],
                'ea_form_tabpane_group_close_row' => [$this, 'block_ea_form_tabpane_group_close_row'],
                'ea_form_tabpane_open_row' => [$this, 'block_ea_form_tabpane_open_row'],
                'ea_form_tabpane_close_row' => [$this, 'block_ea_form_tabpane_close_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'comparison_widget' => [$this, 'block_comparison_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'TODO_ea_fileupload_widget' => [$this, 'block_TODO_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/form_theme.html.twig"));

        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 14
        yield "
";
        // line 15
        yield from $this->unwrap()->yieldBlock('form_end', $context, $blocks);
        // line 21
        yield "
";
        // line 22
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 29
        yield "
";
        // line 31
        yield "
";
        // line 32
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 42
        yield "
";
        // line 43
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 51
        yield "
";
        // line 52
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 57
        yield "
";
        // line 58
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 63
        yield "
";
        // line 64
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 72
        yield "
";
        // line 74
        yield "
";
        // line 75
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 120
        yield "
";
        // line 121
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        yield "
";
        // line 133
        yield from $this->unwrap()->yieldBlock('collection_row', $context, $blocks);
        // line 159
        yield "
";
        // line 160
        yield from $this->unwrap()->yieldBlock('collection_widget', $context, $blocks);
        // line 189
        yield "
";
        // line 190
        yield from $this->unwrap()->yieldBlock('collection_entry_row', $context, $blocks);
        // line 233
        yield "
";
        // line 234
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 251
        yield "
";
        // line 252
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 257
        yield "
";
        // line 259
        yield "
";
        // line 260
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 304
        yield "
";
        // line 306
        yield "
";
        // line 307
        yield from $this->unwrap()->yieldBlock('empty_collection', $context, $blocks);
        // line 312
        yield "
";
        // line 313
        yield from $this->unwrap()->yieldBlock('vich_file_row', $context, $blocks);
        // line 317
        yield "
";
        // line 318
        yield from $this->unwrap()->yieldBlock('vich_file_widget', $context, $blocks);
        // line 352
        yield "
";
        // line 353
        yield from $this->unwrap()->yieldBlock('vich_image_row', $context, $blocks);
        // line 357
        yield "
";
        // line 358
        yield from $this->unwrap()->yieldBlock('vich_image_widget', $context, $blocks);
        // line 400
        yield "
";
        // line 401
        yield from $this->unwrap()->yieldBlock('ea_crud_rest', $context, $blocks);
        // line 404
        yield "
";
        // line 406
        yield from $this->unwrap()->yieldBlock('ea_crud_widget', $context, $blocks);
        // line 411
        yield "
";
        // line 413
        yield from $this->unwrap()->yieldBlock('ea_crud_widget_panels', $context, $blocks);
        // line 418
        yield "
";
        // line 419
        yield from $this->unwrap()->yieldBlock('ea_crud_widget_fieldsets', $context, $blocks);
        // line 484
        yield "
";
        // line 486
        yield from $this->unwrap()->yieldBlock('ea_autocomplete_widget', $context, $blocks);
        // line 489
        yield "
";
        // line 490
        yield from $this->unwrap()->yieldBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 494
        yield "
";
        // line 496
        yield from $this->unwrap()->yieldBlock('ea_code_editor_widget', $context, $blocks);
        // line 506
        yield "
";
        // line 508
        yield from $this->unwrap()->yieldBlock('ea_text_editor_widget', $context, $blocks);
        // line 519
        yield "
";
        // line 521
        yield from $this->unwrap()->yieldBlock('ea_form_row_row', $context, $blocks);
        // line 524
        yield "
";
        // line 525
        yield from $this->unwrap()->yieldBlock('ea_form_column_group_open_row', $context, $blocks);
        // line 531
        yield "
";
        // line 532
        yield from $this->unwrap()->yieldBlock('ea_form_column_group_close_row', $context, $blocks);
        // line 539
        yield "
";
        // line 540
        yield from $this->unwrap()->yieldBlock('ea_form_column_open_row', $context, $blocks);
        // line 562
        yield "
";
        // line 563
        yield from $this->unwrap()->yieldBlock('ea_form_column_close_row', $context, $blocks);
        // line 566
        yield "
";
        // line 567
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_ealabel', $context, $blocks);
        // line 578
        yield "
";
        // line 579
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_label', $context, $blocks);
        // line 617
        yield "
";
        // line 618
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_row', $context, $blocks);
        // line 638
        yield "
";
        // line 639
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_close_row', $context, $blocks);
        // line 645
        yield "
";
        // line 646
        yield from $this->unwrap()->yieldBlock('ea_form_tablist_row', $context, $blocks);
        // line 674
        yield "
";
        // line 675
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_group_open_row', $context, $blocks);
        // line 679
        yield "
";
        // line 680
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_group_close_row', $context, $blocks);
        // line 684
        yield "
";
        // line 685
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_open_row', $context, $blocks);
        // line 698
        yield "
";
        // line 699
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_close_row', $context, $blocks);
        // line 703
        yield "
";
        // line 705
        yield from $this->unwrap()->yieldBlock('ea_filters_widget', $context, $blocks);
        // line 730
        yield "
";
        // line 731
        yield from $this->unwrap()->yieldBlock('comparison_widget', $context, $blocks);
        // line 734
        yield "
";
        // line 735
        yield from $this->unwrap()->yieldBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 745
        yield "
";
        // line 746
        yield from $this->unwrap()->yieldBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 749
        yield "
";
        // line 750
        yield from $this->unwrap()->yieldBlock('ea_fileupload_widget', $context, $blocks);
        // line 813
        yield "
";
        // line 814
        yield from $this->unwrap()->yieldBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 881
        yield "
";
        // line 882
        yield from $this->unwrap()->yieldBlock('ea_slug_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 5
        yield "    ";
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)) > 0) && CoreExtension::inFilter("ea_crud", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'errors', ["attr" => ["errorClass" => "global-invalid-feedback"]]);
            yield "
    ";
        }
        // line 8
        yield "
    ";
        // line 9
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield "
    ";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "get", ["referrer"], "method", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "        <input type=\"hidden\" name=\"referrer\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", ["referrer"], "method", false, false, false, 11), "html", null, true);
            yield "\">
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_end"));

        // line 16
        yield "        ";
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new RuntimeError('Variable "render_rest" does not exist.', 16, $this->source); })()))) {
            // line 17
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'rest');
            yield "
        ";
        }
        // line 19
        yield "    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 23
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 23, $this->source); })())) > 0)) {
            // line 24
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 25
                yield "            <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "errorClass", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 25, $this->source); })()), "errorClass", [], "any", false, false, false, 25), "")) : ("")), "html", null, true);
                yield " invalid-feedback d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 25), "html", null, true);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 33
        if (( !array_key_exists("type", $context) || !CoreExtension::inFilter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 33, $this->source); })()), ["file", "hidden"]))) {
            // line 34
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 34, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 34, $this->source); })()), "class", [], "any", false, false, false, 34), "")) : ("")))]);
        }
        // line 36
        if ((array_key_exists("type", $context) && (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 36, $this->source); })()) == "range") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 36, $this->source); })()) == "color")))) {
            // line 37
            yield "        ";
            // line 38
            $context["required"] = false;
        }
        // line 40
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 44
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 44, $this->source); })()) != "single_text")) {
            // line 45
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 45, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 45, $this->source); })()), "class", [], "any", false, false, false, 45), "")) : ("")) . " form-inline"))]);
        }
        // line 47
        yield "<div class=\"datetime-widget datetime-widget-datetime\">";
        // line 48
        yield from $this->yieldParentBlock("datetime_widget", $context, $blocks);
        // line 49
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 53
        yield "<div class=\"datetime-widget datetime-widget-date\">";
        // line 54
        yield from $this->yieldParentBlock("date_widget", $context, $blocks);
        // line 55
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 59
        yield "<div class=\"datetime-widget datetime-widget-time\">";
        // line 60
        yield from $this->yieldParentBlock("time_widget", $context, $blocks);
        // line 61
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 65
        if ((($tmp = ((array_key_exists("vich", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["vich"]) || array_key_exists("vich", $context) ? $context["vich"] : (function () { throw new RuntimeError('Variable "vich" does not exist.', 65, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 66, $this->source); })()), "file")) : ("file"));
            // line 67
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 69
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 76
        yield "    ";
        $context["row_attr"] = Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 76, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 77, $this->source); })()), "class", [], "any", false, false, false, 77), "")) : ("")) . " form-group")]);
        // line 79
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "vars", [], "any", false, false, false, 79), "ea_vars", [], "any", false, false, false, 79), "field", [], "any", false, false, false, 79);
        // line 80
        yield "
    <div class=\"";
        // line 81
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 81) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 81, $this->source); })()), "columns", [], "any", false, false, false, 81)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 81, $this->source); })()), "columns", [], "any", false, false, false, 81), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", true, true, false, 81) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 81, $this->source); })()), "defaultColumns", [], "any", false, false, false, 81)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 81, $this->source); })()), "defaultColumns", [], "any", false, false, false, 81), "html", null, true)) : (""))));
        yield "\">";
        // line 82
        $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 82, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 82, $this->source); })()), "class", [], "any", false, false, false, 82), "mb-3")) : ("mb-3")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 82, $this->source); })()), "class", [], "any", false, false, false, 82), "mb-3")) : ("mb-3"))));
        // line 83
        yield "<div ";
        $_v0 = $context;
        $_v1 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 83, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 83, $this->source); })()) . (((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 83, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 83, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 83, $this->source); })()))) ? (" has-error") : (""))))])];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 83, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v0;
        yield ">";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'label');
        // line 85
        yield "<div class=\"form-widget\">
                ";
        // line 86
        $context["has_prepend_html"] =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 86, $this->source); })()), "prepend_html", [], "any", false, false, false, 86), null)) : (null)));
        // line 87
        yield "                ";
        $context["has_append_html"] =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), "append_html", [], "any", false, false, false, 87), null)) : (null)));
        // line 88
        yield "                ";
        $context["has_input_groups"] = ((isset($context["has_prepend_html"]) || array_key_exists("has_prepend_html", $context) ? $context["has_prepend_html"] : (function () { throw new RuntimeError('Variable "has_prepend_html" does not exist.', 88, $this->source); })()) || (isset($context["has_append_html"]) || array_key_exists("has_append_html", $context) ? $context["has_append_html"] : (function () { throw new RuntimeError('Variable "has_append_html" does not exist.', 88, $this->source); })()));
        // line 89
        yield "
                ";
        // line 90
        if ((($tmp = (isset($context["has_input_groups"]) || array_key_exists("has_input_groups", $context) ? $context["has_input_groups"] : (function () { throw new RuntimeError('Variable "has_input_groups" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"input-group\">";
        }
        // line 91
        yield "                    ";
        if ((($tmp = (isset($context["has_prepend_html"]) || array_key_exists("has_prepend_html", $context) ? $context["has_prepend_html"] : (function () { throw new RuntimeError('Variable "has_prepend_html" does not exist.', 91, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 93
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 93, $this->source); })()), "prepend_html", [], "any", false, false, false, 93);
            yield "</span>
                        </div>
                    ";
        }
        // line 96
        yield "
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'widget');
        yield "

                    ";
        // line 99
        if ((($tmp = (isset($context["has_append_html"]) || array_key_exists("has_append_html", $context) ? $context["has_append_html"] : (function () { throw new RuntimeError('Variable "has_append_html" does not exist.', 99, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "                        <span class=\"input-group-text\">";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 100, $this->source); })()), "append_html", [], "any", false, false, false, 100);
            yield "</span>
                    ";
        }
        // line 102
        yield "                ";
        if ((($tmp = (isset($context["has_input_groups"]) || array_key_exists("has_input_groups", $context) ? $context["has_input_groups"] : (function () { throw new RuntimeError('Variable "has_input_groups" does not exist.', 102, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "</div>";
        }
        // line 103
        yield "
                ";
        // line 104
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 104) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 104, $this->source); })()), "help", [], "any", false, false, false, 104)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 104, $this->source); })()), "help", [], "any", false, false, false, 104)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                    <small class=\"form-text form-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 105, $this->source); })()), "help", [], "any", false, false, false, 105), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 105, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 105, $this->source); })()));
            yield "</small>
                ";
        } elseif ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 106
($context["form"] ?? null), "vars", [], "any", false, true, false, 106), "help", [], "any", true, true, false, 106) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "vars", [], "any", false, false, false, 106), "help", [], "any", false, false, false, 106)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "vars", [], "any", false, false, false, 106), "help", [], "any", false, false, false, 106)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 107
            yield "                    <small class=\"form-text form-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "help", [], "any", false, false, false, 107), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "help_translation_parameters", [], "any", false, false, false, 107), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "translation_domain", [], "any", false, false, false, 107));
            yield "</small>
                ";
        }
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'errors');
        // line 111
        yield "</div>
        </div>
    </div>

    ";
        // line 116
        yield "    ";
        if ((null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 116, $this->source); })()), "columns", [], "any", false, false, false, 116), null)) : (null)))) {
            // line 117
            yield "        <div class=\"flex-fill\"></div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        yield "    ";
        if (("ea-autocomplete" == ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 122, $this->source); })()), "data-ea-widget", [], "array", false, false, false, 122), false)) : (false)))) {
            // line 123
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 123, $this->source); })()), ["data-ea-i18n-no-results-found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-results-found", [], "EasyAdminBundle"), "data-ea-i18n-no-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-more-results", [], "EasyAdminBundle"), "data-ea-i18n-loading-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.loading-more-results", [], "EasyAdminBundle")]);
            // line 128
            yield "    ";
        }
        // line 129
        yield "
    ";
        // line 130
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        // line 134
        yield "    ";
        if ((array_key_exists("prototype", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 134, $this->source); })()), "rendered", [], "any", false, false, false, 134))) {
            // line 135
            yield "        ";
            $context["row_attr"] = Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 135, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 135, $this->source); })()), 'row')]);
            // line 136
            yield "    ";
        }
        // line 137
        yield "
    ";
        // line 138
        $context["maxKey"] = 0;
        // line 139
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "children", [], "any", false, false, false, 139)));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 140
            yield "        ";
            if (CoreExtension::matches("/^\\d+\$/", $context["key"])) {
                // line 141
                yield "            ";
                $context["intKey"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber($context["key"], 0, "", "", "");
                // line 142
                yield "            ";
                if (((isset($context["intKey"]) || array_key_exists("intKey", $context) ? $context["intKey"] : (function () { throw new RuntimeError('Variable "intKey" does not exist.', 142, $this->source); })()) > (isset($context["maxKey"]) || array_key_exists("maxKey", $context) ? $context["maxKey"] : (function () { throw new RuntimeError('Variable "maxKey" does not exist.', 142, $this->source); })()))) {
                    // line 143
                    yield "                ";
                    $context["maxKey"] = (isset($context["intKey"]) || array_key_exists("intKey", $context) ? $context["intKey"] : (function () { throw new RuntimeError('Variable "intKey" does not exist.', 143, $this->source); })());
                    // line 144
                    yield "            ";
                }
                // line 145
                yield "        ";
            }
            // line 146
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "
    ";
        // line 148
        $context["row_attr"] = Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 148, $this->source); })()), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 150
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "vars", [], "any", false, false, false, 150), "ea_vars", [], "any", false, false, false, 150), "field", [], "any", false, false, false, 150) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "vars", [], "any", false, false, false, 150), "ea_vars", [], "any", false, false, false, 150), "field", [], "any", false, false, false, 150), "customOptions", [], "any", false, false, false, 150), "get", ["entryIsComplex"], "method", false, false, false, 150))) ? ("true") : ("false")), "data-allow-add" => (((($tmp =         // line 151
(isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 151, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-allow-delete" => (((($tmp =         // line 152
(isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 152, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-num-items" => ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 153
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "children", [], "any", false, false, false, 153))) ? (0) : (((isset($context["maxKey"]) || array_key_exists("maxKey", $context) ? $context["maxKey"] : (function () { throw new RuntimeError('Variable "maxKey" does not exist.', 153, $this->source); })()) + 1))), "data-form-type-name-placeholder" => ((        // line 154
array_key_exists("prototype", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 154, $this->source); })()), "vars", [], "any", false, false, false, 154), "name", [], "any", false, false, false, 154)) : (""))]);
        // line 156
        yield "
    ";
        // line 157
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 161
        yield "    ";
        // line 163
        yield "    ";
        $context["isEmptyCollection"] = ((null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 163, $this->source); })())) || (is_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 163, $this->source); })())) && Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 163, $this->source); })()))));
        // line 164
        yield "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 164), "ea_vars", [], "any", false, true, false, 164), "field", [], "any", false, true, false, 164), "fieldFqcn", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "vars", [], "any", false, false, false, 164), "ea_vars", [], "any", false, false, false, 164), "field", [], "any", false, false, false, 164), "fieldFqcn", [], "any", false, false, false, 164), false)) : (false)));
        // line 165
        yield "
    <div class=\"ea-form-collection-items\">
        ";
        // line 167
        if ((($tmp = (isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 167, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("empty_collection", $context, $blocks);
            yield "
        ";
        } elseif ((($tmp =         // line 169
(isset($context["is_array_field"]) || array_key_exists("is_array_field", $context) ? $context["is_array_field"] : (function () { throw new RuntimeError('Variable "is_array_field" does not exist.', 169, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
        ";
        } else {
            // line 172
            yield "            <div class=\"accordion\">
                ";
            // line 173
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
            </div>
        ";
        }
        // line 176
        yield "    </div>

    ";
        // line 178
        if (((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 178, $this->source); })()) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 178), "prototype", [], "any", true, true, false, 178))) {
            // line 179
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 179, $this->source); })()), ["data-empty-collection" =>             $this->unwrap()->renderBlock("empty_collection", $context, $blocks)]);
            // line 180
            yield "    ";
        }
        // line 181
        yield "
    ";
        // line 182
        if ((((array_key_exists("allow_add", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 182, $this->source); })()), false)) : (false)) &&  !(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 182, $this->source); })()))) {
            // line 183
            yield "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            ";
            // line 184
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:plus", "class" => "pr-1"]);
            yield "
            ";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            yield "
        </button>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 190
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_entry_row"));

        // line 191
        yield "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })())), "vars", [], "any", false, true, false, 191), "ea_vars", [], "any", false, true, false, 191), "field", [], "any", false, true, false, 191), "fieldFqcn", [], "any", true, true, false, 191)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })())), "vars", [], "any", false, false, false, 191), "ea_vars", [], "any", false, false, false, 191), "field", [], "any", false, false, false, 191), "fieldFqcn", [], "any", false, false, false, 191), false)) : (false)));
        // line 192
        yield "    ";
        $context["is_complex"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })())), "vars", [], "any", false, true, false, 192), "ea_vars", [], "any", false, true, false, 192), "field", [], "any", false, true, false, 192), "customOptions", [], "any", false, true, false, 192), "get", ["entryIsComplex"], "method", true, true, false, 192) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })())), "vars", [], "any", false, false, false, 192), "ea_vars", [], "any", false, false, false, 192), "field", [], "any", false, false, false, 192), "customOptions", [], "any", false, false, false, 192), "get", ["entryIsComplex"], "method", false, false, false, 192)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })())), "vars", [], "any", false, false, false, 192), "ea_vars", [], "any", false, false, false, 192), "field", [], "any", false, false, false, 192), "customOptions", [], "any", false, false, false, 192), "get", ["entryIsComplex"], "method", false, false, false, 192)) : (false));
        // line 193
        yield "    ";
        $context["to_string_method"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })())), "vars", [], "any", false, true, false, 193), "ea_vars", [], "any", false, true, false, 193), "field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", ["entryToStringMethod"], "method", true, true, false, 193) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })())), "vars", [], "any", false, false, false, 193), "ea_vars", [], "any", false, false, false, 193), "field", [], "any", false, false, false, 193), "customOptions", [], "any", false, false, false, 193), "get", ["entryToStringMethod"], "method", false, false, false, 193)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })())), "vars", [], "any", false, false, false, 193), "ea_vars", [], "any", false, false, false, 193), "field", [], "any", false, false, false, 193), "customOptions", [], "any", false, false, false, 193), "get", ["entryToStringMethod"], "method", false, false, false, 193)) : (null));
        // line 194
        yield "    ";
        $context["allows_deleting_items"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })())), "vars", [], "any", false, true, false, 194), "allow_delete", [], "any", true, true, false, 194)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })())), "vars", [], "any", false, false, false, 194), "allow_delete", [], "any", false, false, false, 194), false)) : (false));
        // line 195
        yield "    ";
        $context["render_expanded"] = ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "vars", [], "any", false, false, false, 195), "valid", [], "any", false, false, false, 195) || ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })())), "vars", [], "any", false, true, false, 195), "ea_vars", [], "any", false, true, false, 195), "field", [], "any", false, true, false, 195), "customOptions", [], "any", false, true, false, 195), "get", ["renderExpanded"], "method", true, true, false, 195)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })())), "vars", [], "any", false, false, false, 195), "ea_vars", [], "any", false, false, false, 195), "field", [], "any", false, false, false, 195), "customOptions", [], "any", false, false, false, 195), "get", ["renderExpanded"], "method", false, false, false, 195), false)) : (false)));
        // line 196
        yield "    ";
        $context["delete_item_button"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 197
            yield "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            yield "\">
            ";
            // line 199
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
        </button>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 202
        yield "
    <div class=\"field-collection-item ";
        // line 203
        yield (((($tmp = (isset($context["is_complex"]) || array_key_exists("is_complex", $context) ? $context["is_complex"] : (function () { throw new RuntimeError('Variable "is_complex" does not exist.', 203, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("field-collection-item-complex") : (""));
        yield " ";
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "vars", [], "any", false, false, false, 203), "valid", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""));
        yield "\">
        ";
        // line 204
        if ((($tmp = ((array_key_exists("is_array_field", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_array_field"]) || array_key_exists("is_array_field", $context) ? $context["is_array_field"] : (function () { throw new RuntimeError('Variable "is_array_field" does not exist.', 204, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 205
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), 'label');
            yield "
            ";
            // line 206
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), 'widget');
            yield "
            ";
            // line 207
            if (((isset($context["allows_deleting_items"]) || array_key_exists("allows_deleting_items", $context) ? $context["allows_deleting_items"] : (function () { throw new RuntimeError('Variable "allows_deleting_items" does not exist.', 207, $this->source); })()) &&  !(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 207, $this->source); })()))) {
                // line 208
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delete_item_button"]) || array_key_exists("delete_item_button", $context) ? $context["delete_item_button"] : (function () { throw new RuntimeError('Variable "delete_item_button" does not exist.', 208, $this->source); })()), "html", null, true);
                yield "
            ";
            }
            // line 210
            yield "        ";
        } else {
            // line 211
            yield "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 213
            yield (((($tmp = (isset($context["render_expanded"]) || array_key_exists("render_expanded", $context) ? $context["render_expanded"] : (function () { throw new RuntimeError('Variable "render_expanded" does not exist.', 213, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 213, $this->source); })()), "html", null, true);
            yield "-contents\">
                        ";
            // line 214
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-collection-item-collapse-marker"]);
            yield "
                        ";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 215, $this->source); })()), (isset($context["to_string_method"]) || array_key_exists("to_string_method", $context) ? $context["to_string_method"] : (function () { throw new RuntimeError('Variable "to_string_method" does not exist.', 215, $this->source); })())), "html", null, true);
            yield "
                    </button>

                    ";
            // line 218
            if (((isset($context["allows_deleting_items"]) || array_key_exists("allows_deleting_items", $context) ? $context["allows_deleting_items"] : (function () { throw new RuntimeError('Variable "allows_deleting_items" does not exist.', 218, $this->source); })()) &&  !(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 218, $this->source); })()))) {
                // line 219
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delete_item_button"]) || array_key_exists("delete_item_button", $context) ? $context["delete_item_button"] : (function () { throw new RuntimeError('Variable "delete_item_button" does not exist.', 219, $this->source); })()), "html", null, true);
                yield "
                    ";
            }
            // line 221
            yield "                </h2>
                <div id=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 222, $this->source); })()), "html", null, true);
            yield "-contents\" class=\"accordion-collapse collapse ";
            yield (((($tmp = (isset($context["render_expanded"]) || array_key_exists("render_expanded", $context) ? $context["render_expanded"] : (function () { throw new RuntimeError('Variable "render_expanded" does not exist.', 222, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                    <div class=\"accordion-body\">
                        <div class=\"row\">
                            ";
            // line 225
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), 'widget');
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 231
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_compound(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 235
        yield "    <div class=\"form-widget-compound\">
        ";
        // line 236
        if (CoreExtension::inFilter("collection", (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 236, $this->source); })()))) {
            // line 237
            yield "            ";
            // line 239
            yield "            ";
            $context["isEmptyCollection"] = ((null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 239, $this->source); })())) || (is_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 239, $this->source); })())) && Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 239, $this->source); })()))));
            // line 240
            yield "            ";
            if ((($tmp = (isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 240, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 241
                yield "                ";
                yield from                 $this->unwrap()->yieldBlock("empty_collection", $context, $blocks);
                yield "
            ";
            }
            // line 243
            yield "            ";
            if (((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 243, $this->source); })()) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 243), "prototype", [], "any", true, true, false, 243))) {
                // line 244
                yield "                ";
                $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 244, $this->source); })()), ["data-empty-collection" =>                 $this->unwrap()->renderBlock("empty_collection", $context, $blocks)]);
                // line 245
                yield "            ";
            }
            // line 246
            yield "        ";
        }
        // line 247
        yield "
        ";
        // line 248
        yield from $this->yieldParentBlock("form_widget_compound", $context, $blocks);
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 252
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 253
        yield "<div class=\"form-group field-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 253, $this->source); })()),  -2)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "field", [], "any", false, true, false, 253), "css_class", [], "any", true, true, false, 253)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "field", [], "any", false, false, false, 253), "css_class", [], "any", false, false, false, 253), "")) : ("")), "html", null, true);
        yield "\">";
        // line 254
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), 'widget');
        // line 255
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 260
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 261
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 261, $this->source); })()) === false)) {
        } else {
            // line 265
            if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 265, $this->source); })()))) {
                // line 266
                $context["element"] = "legend";
                // line 267
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 267, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 267)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 267, $this->source); })()), "class", [], "any", false, false, false, 267), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 269
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 269, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 269, $this->source); })()), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 269)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 269, $this->source); })()), "class", [], "any", false, false, false, 269), "")) : ("")) . " form-control-label"))]);
            }
            // line 271
            if ((($tmp = (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 271, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 272
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 272, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 272)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 272, $this->source); })()), "class", [], "any", false, false, false, 272), "")) : ("")) . " required"))]);
            }
            // line 274
            if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 274, $this->source); })()) === "")) {
            } elseif ((null ===             // line 277
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 277, $this->source); })()))) {
                // line 278
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 278, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 279
                    $context["label"] = Twig\Extension\CoreExtension::replace((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 279, $this->source); })()), ["%name%" =>                     // line 280
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 280, $this->source); })()), "%id%" =>                     // line 281
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 281, $this->source); })())]);
                } else {
                    // line 284
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 284, $this->source); })()));
                }
            }
            // line 287
            yield "<";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 287, $this->source); })()), "label")) : ("label")), "html", null, true);
            if ((($tmp = (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 287, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $_v2 = $context;
                $_v3 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 287, $this->source); })())];
                if (!is_iterable($_v3)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 287, $this->getSourceContext());
                }
                $_v3 = CoreExtension::toArray($_v3);
                $context = $_v3 + $context + $this->env->getGlobals();
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $_v2;
            }
            yield ">";
            // line 288
            if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 288, $this->source); })()) === false)) {
                // line 289
                if ((((array_key_exists("label_html", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label_html"]) || array_key_exists("label_html", $context) ? $context["label_html"] : (function () { throw new RuntimeError('Variable "label_html" does not exist.', 289, $this->source); })()), false)) : (false)) === false)) {
                    // line 290
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 290, $this->source); })()), "html", null, true);
                } else {
                    // line 292
                    yield (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 292, $this->source); })());
                }
            } else {
                // line 295
                if ((((array_key_exists("label_html", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label_html"]) || array_key_exists("label_html", $context) ? $context["label_html"] : (function () { throw new RuntimeError('Variable "label_html" does not exist.', 295, $this->source); })()), false)) : (false)) === false)) {
                    // line 296
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 296, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 296, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 296, $this->source); })())), "html", null, true);
                } else {
                    // line 298
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 298, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 298, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 298, $this->source); })()));
                }
            }
            // line 301
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 301, $this->source); })()), "label")) : ("label")), "html", null, true);
            yield ">";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 307
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_empty_collection(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 308
        yield "    <div class=\"empty collection-empty\">
        ";
        // line 309
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "templatePath", ["label/empty"], "method", false, false, false, 309));
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 313
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_file_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 314
        yield "    ";
        $context["force_error"] = true;
        // line 315
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 318
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 319
        yield "    <div class=\"ea-vich-file\">
        ";
        // line 320
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("download_uri", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 320, $this->source); })()), "")) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 321
            yield "            <a class=\"ea-vich-file-name\" href=\"";
            yield ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 321, $this->source); })()) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 321, $this->source); })())), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 321, $this->source); })()), "html", null, true)));
            yield "\">
                ";
            // line 322
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
            // line 323
            if ((($tmp = ((array_key_exists("download_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new RuntimeError('Variable "download_label" does not exist.', 323, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 324
                yield ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 324, $this->source); })()) === false)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new RuntimeError('Variable "download_label" does not exist.', 324, $this->source); })()), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new RuntimeError('Variable "download_label" does not exist.', 324, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 324, $this->source); })())), "html", null, true)));
            } else {
                // line 326
                yield ((Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 326, $this->source); })()), "/"))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 326, $this->source); })()), "/")), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 326, $this->source); })())), "html", null, true)));
            }
            // line 328
            yield "</a>
        ";
        }
        // line 330
        yield "
        ";
        // line 331
        $context["file_upload_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 332
            yield "            var newFile = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 332, $this->source); })()), "file", [], "any", false, false, false, 332), "vars", [], "any", false, false, false, 332), "id", [], "any", false, false, false, 332), "html", null, true);
            yield "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), "file", [], "any", false, false, false, 335), "vars", [], "any", false, false, false, 335), "id", [], "any", false, false, false, 335), "html", null, true);
            yield "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 337
        yield "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 340
        yield "            <div class=\"btn btn-secondary input-file-container\">
                ";
        // line 341
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:upload"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "file", [], "any", false, false, false, 342), 'widget', ["attr" => ["onchange" => (isset($context["file_upload_js"]) || array_key_exists("file_upload_js", $context) ? $context["file_upload_js"] : (function () { throw new RuntimeError('Variable "file_upload_js" does not exist.', 342, $this->source); })())], "vich" => true]);
        yield "
            </div>

            ";
        // line 345
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 345)) {
            // line 346
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 346, $this->source); })()), "delete", [], "any", false, false, false, 346), 'row');
            yield "
            ";
        }
        // line 348
        yield "        </div>
        <div class=\"small\" id=\"";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "file", [], "any", false, false, false, 349), "vars", [], "any", false, false, false, 349), "id", [], "any", false, false, false, 349), "html", null, true);
        yield "_new_file_name\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 353
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_image_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 354
        yield "    ";
        $context["force_error"] = true;
        // line 355
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 358
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_image_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 359
        yield "    ";
        $context["formTypeOptions"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, true, false, 359), "formTypeOptions", [], "any", true, true, false, 359)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_vars"]) || array_key_exists("ea_vars", $context) ? $context["ea_vars"] : (function () { throw new RuntimeError('Variable "ea_vars" does not exist.', 359, $this->source); })()), "field", [], "any", false, false, false, 359), "formTypeOptions", [], "any", false, false, false, 359), "")) : (""));
        // line 360
        yield "    <div class=\"ea-vich-image\">
        ";
        // line 361
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("image_uri", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 361, $this->source); })()), "")) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 362
            yield "            ";
            if (Twig\Extension\CoreExtension::testEmpty(((array_key_exists("download_uri", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 362, $this->source); })()), "")) : ("")))) {
                // line 363
                yield "                <div class=\"ea-lightbox-thumbnail\">
                    <img style=\"cursor: initial\" src=\"";
                // line 364
                yield ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 364, $this->source); })()) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 364, $this->source); })())), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 364, $this->source); })()), "html", null, true)));
                yield "\">
                </div>
            ";
            } else {
                // line 367
                yield "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 367, $this->source); })()));
                // line 368
                yield "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 369
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new RuntimeError('Variable "_lightbox_id" does not exist.', 369, $this->source); })()), "html", null, true);
                yield "\">
                    <img src=\"";
                // line 370
                yield ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 370, $this->source); })()) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 370, $this->source); })())), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 370, $this->source); })()), "html", null, true)));
                yield "\">
                </a>

                <div id=\"";
                // line 373
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new RuntimeError('Variable "_lightbox_id" does not exist.', 373, $this->source); })()), "html", null, true);
                yield "\" class=\"ea-lightbox\">
                    <img src=\"";
                // line 374
                yield ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 374, $this->source); })()) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 374, $this->source); })())), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 374, $this->source); })()), "html", null, true)));
                yield "\">
                </div>
            ";
            }
            // line 377
            yield "        ";
        }
        // line 378
        yield "
        ";
        // line 379
        $context["file_upload_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 380
            yield "            var newFile = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "file", [], "any", false, false, false, 380), "vars", [], "any", false, false, false, 380), "id", [], "any", false, false, false, 380), "html", null, true);
            yield "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "file", [], "any", false, false, false, 383), "vars", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383), "html", null, true);
            yield "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 385
        yield "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 388
        yield "            <div class=\"btn btn-secondary input-file-container\">
                ";
        // line 389
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:upload"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        // line 390
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "file", [], "any", false, false, false, 390), 'widget', ["attr" => ["onchange" => (isset($context["file_upload_js"]) || array_key_exists("file_upload_js", $context) ? $context["file_upload_js"] : (function () { throw new RuntimeError('Variable "file_upload_js" does not exist.', 390, $this->source); })())], "vich" => true]);
        yield "
            </div>

            ";
        // line 393
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 393)) {
            // line 394
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "delete", [], "any", false, false, false, 394), 'row');
            yield "
            ";
        }
        // line 396
        yield "        </div>
        <div class=\"small\" id=\"";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 397, $this->source); })()), "file", [], "any", false, false, false, 397), "vars", [], "any", false, false, false, 397), "id", [], "any", false, false, false, 397), "html", null, true);
        yield "_new_file_name\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 401
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_rest(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_rest"));

        // line 402
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), 'rest');
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 406
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget"));

        // line 407
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 407, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 408
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 413
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget_panels(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget_panels"));

        // line 414
        yield "    ";
        trigger_deprecation('', '', "The \"ea_crud_widget_panels\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." in \"@EasyAdmin/crud/form_theme.html.twig\" at line 414.");
        // line 415
        yield "
    ";
        // line 416
        yield from         $this->unwrap()->yieldBlock("ea_crud_widget_fieldsets", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 419
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget_fieldsets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget_fieldsets"));

        // line 420
        yield "    ";
        trigger_deprecation('', '', "The \"ea_crud_widget_fieldsets\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." in \"@EasyAdmin/crud/form_theme.html.twig\" at line 420.");
        // line 421
        yield "
    ";
        // line 422
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 422, $this->source); })()), "vars", [], "any", false, false, false, 422), "ea_crud_form", [], "any", false, false, false, 422), "form_fieldsets", [], "any", false, false, false, 422), function ($__fieldset_config__) use ($context, $macros) { $context["fieldset_config"] = $__fieldset_config__; return ( !CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 422) || (CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 422) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 422, $this->source); })()))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["fieldset_name"] => $context["fieldset_config"]) {
            // line 423
            yield "        ";
            $context["fieldset_has_header"] = ((((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", true, true, false, 423)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 423), false)) : (false)) || ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 423)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 423), false)) : (false))) || ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 423)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 423), false)) : (false)));
            // line 424
            yield "
        ";
            // line 425
            $context["collapsible"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "collapsible", [], "any", false, false, false, 425);
            // line 426
            yield "        ";
            $context["collapsed"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "collapsed", [], "any", false, false, false, 426);
            // line 427
            yield "
        <div class=\"";
            // line 428
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", true, true, false, 428) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 428)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 428), "html", null, true)) : (""));
            yield "\">
            <fieldset class=\"form-fieldset\">
                ";
            // line 430
            if ((($tmp = (isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 430, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 431
                yield "                    <div class=\"form-fieldset-header ";
                yield (((($tmp = (isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 431, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 431)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 431), false)) : (false)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                        <div class=\"form-fieldset-title\">
                            <a ";
                // line 433
                if ((($tmp =  !(isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 433, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 434
                    yield "                                href=\"#\" class=\"not-collapsible\"
                            ";
                } else {
                    // line 436
                    yield "                                href=\"#content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                                class=\"form-fieldset-collapse ";
                    // line 437
                    yield (((($tmp = (isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 437, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                                aria-expanded=\"";
                    // line 438
                    yield (((($tmp = (isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 438, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
                    yield "\"
                            ";
                }
                // line 440
                yield "                            >
                                ";
                // line 441
                if ((($tmp = (isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 441, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 442
                    yield "                                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
                    yield "
                                ";
                }
                // line 444
                yield "
                                ";
                // line 445
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 445)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 445), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 446
                    yield "                                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 446), "class" => "form-fieldset-icon"]);
                    yield "
                                ";
                }
                // line 448
                yield "                                ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 448));
                yield "
                            </a>

                            ";
                // line 451
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 451)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 451), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 452
                    yield "                                <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 452));
                    yield "</div>
                            ";
                }
                // line 454
                yield "                        </div>
                    </div>
                ";
            }
            // line 457
            yield "
                <div id=\"content-";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
            yield "\" class=\"form-fieldset-body ";
            yield (((($tmp =  !(isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 458, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
            yield " ";
            yield (((($tmp = (isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 458, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
            yield " ";
            yield (((($tmp =  !(isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 458, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                    <div class=\"row\">
                        ";
            // line 460
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 460, $this->source); })()), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!CoreExtension::inFilter("hidden", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 460), "block_prefixes", [], "any", false, false, false, 460)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 460), "ea_crud_form", [], "any", false, false, false, 460), "form_fieldset", [], "any", false, false, false, 460) == $context["fieldset_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 461
                yield "                            ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 461), "ea_crud_form", [], "any", false, false, false, 461), "form_tab", [], "any", false, false, false, 461) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 461), "ea_crud_form", [], "any", false, false, false, 461), "form_tab", [], "any", false, false, false, 461) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 461, $this->source); })())))) {
                    // line 462
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    yield "
                            ";
                }
                // line 464
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 465
            yield "                    </div>
                </div>
            </fieldset>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 469
        if (!$context['_iterated']) {
            // line 470
            yield "        ";
            // line 481
            yield "        ";
            yield $this->getTemplateForMacro("macro_recursiveFieldsetForm", $context, 481, $this->getSourceContext())->macro_recursiveFieldsetForm(...[(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 481, $this->source); })())]);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['fieldset_name'], $context['fieldset_config'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 486
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_autocomplete_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_widget"));

        // line 487
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 487, $this->source); })()), "autocomplete", [], "any", false, false, false, 487), 'widget', ["attr" => Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 487, $this->source); })()), ["required" => (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 487, $this->source); })())])]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 490
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_autocomplete_inner_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_inner_label"));

        // line 491
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 491, $this->source); })())), "vars", [], "any", false, false, false, 491), "name", [], "any", false, false, false, 491);
        // line 492
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 496
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_code_editor_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_code_editor_widget"));

        // line 497
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 497, $this->source); })()), 'widget', ["attr" => Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 497, $this->source); })()), ["data-ea-code-editor-field" => "true", "data-language" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 499
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 499, $this->source); })()), "vars", [], "any", false, false, false, 499), "ea_vars", [], "any", false, false, false, 499), "field", [], "any", false, false, false, 499), "customOptions", [], "any", false, false, false, 499), "get", ["language"], "method", false, false, false, 499), "data-tab-size" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 500
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 500, $this->source); })()), "vars", [], "any", false, false, false, 500), "ea_vars", [], "any", false, false, false, 500), "field", [], "any", false, false, false, 500), "customOptions", [], "any", false, false, false, 500), "get", ["tabSize"], "method", false, false, false, 500), "data-indent-with-tabs" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 501
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 501, $this->source); })()), "vars", [], "any", false, false, false, 501), "ea_vars", [], "any", false, false, false, 501), "field", [], "any", false, false, false, 501), "customOptions", [], "any", false, false, false, 501), "get", ["indentWithTabs"], "method", false, false, false, 501)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-show-line-numbers" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 502
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 502, $this->source); })()), "vars", [], "any", false, false, false, 502), "ea_vars", [], "any", false, false, false, 502), "field", [], "any", false, false, false, 502), "customOptions", [], "any", false, false, false, 502), "get", ["showLineNumbers"], "method", false, false, false, 502)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-number-of-rows" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 503
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 503, $this->source); })()), "vars", [], "any", false, false, false, 503), "ea_vars", [], "any", false, false, false, 503), "field", [], "any", false, false, false, 503), "customOptions", [], "any", false, false, false, 503), "get", ["numOfRows"], "method", false, false, false, 503)])]);
        // line 504
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 508
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_text_editor_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_text_editor_widget"));

        // line 509
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 509, $this->source); })()), 'widget', ["attr" => Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 509, $this->source); })()), ["class" => "ea-text-editor-content d-none", "data-number-of-rows" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 511
($context["form"] ?? null), "vars", [], "any", false, true, false, 511), "ea_vars", [], "any", false, true, false, 511), "field", [], "any", false, true, false, 511), "customOptions", [], "any", false, true, false, 511), "get", ["numOfRows"], "method", true, true, false, 511)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 511, $this->source); })()), "vars", [], "any", false, false, false, 511), "ea_vars", [], "any", false, false, false, 511), "field", [], "any", false, false, false, 511), "customOptions", [], "any", false, false, false, 511), "get", ["numOfRows"], "method", false, false, false, 511), 5)) : (5)), "data-trix-editor-config" => json_encode(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 512
($context["form"] ?? null), "vars", [], "any", false, true, false, 512), "ea_vars", [], "any", false, true, false, 512), "field", [], "any", false, true, false, 512), "customOptions", [], "any", false, true, false, 512), "get", ["trixEditorConfig"], "method", true, true, false, 512)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 512, $this->source); })()), "vars", [], "any", false, false, false, 512), "ea_vars", [], "any", false, false, false, 512), "field", [], "any", false, false, false, 512), "customOptions", [], "any", false, false, false, 512), "get", ["trixEditorConfig"], "method", false, false, false, 512), null)) : (null)))])]);
        // line 513
        yield "

    <div class=\"ea-text-editor-wrapper ";
        // line 515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 515)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 515, $this->source); })()), "class", [], "any", false, false, false, 515), "")) : ("")) . (((($tmp =  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 515, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-error") : (""))), "html", null, true);
        yield "\">
        <trix-editor input=\"";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 516, $this->source); })()), "html", null, true);
        yield "\" class=\"trix-content\"></trix-editor>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 521
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_row_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_row_row"));

        // line 522
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 522, $this->source); })()), "vars", [], "any", false, false, false, 522), "row_attr", [], "any", false, false, false, 522), "class", [], "any", false, false, false, 522), "html", null, true);
        yield "\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 525
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_group_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_column_group_open_row"));

        // line 526
        yield "    ";
        // line 527
        yield "    ";
        if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 527), "ea_is_inside_tab", [], "any", true, true, false, 527)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 527, $this->source); })()), "vars", [], "any", false, false, false, 527), "ea_is_inside_tab", [], "any", false, false, false, 527), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 528
            yield "        <div class=\"row\">
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 532
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_group_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_column_group_close_row"));

        // line 533
        yield "    ";
        // line 535
        yield "    ";
        if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 535), "ea_is_inside_tab", [], "any", true, true, false, 535)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 535, $this->source); })()), "vars", [], "any", false, false, false, 535), "ea_is_inside_tab", [], "any", false, false, false, 535), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 536
            yield "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 540
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_column_open_row"));

        // line 541
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 541, $this->source); })()), "vars", [], "any", false, false, false, 541), "ea_vars", [], "any", false, false, false, 541), "field", [], "any", false, false, false, 541);
        // line 542
        yield "    ";
        $context["field_icon"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 542, $this->source); })()), "getCustomOption", ["icon"], "method", false, false, false, 542);
        // line 543
        yield "    ";
        // line 544
        yield "    ";
        $context["has_label"] = (( !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 544, $this->source); })()), "label", [], "any", false, false, false, 544) === false) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 544, $this->source); })()), "label", [], "any", false, false, false, 544))) &&  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 544, $this->source); })()), "label", [], "any", false, false, false, 544) === ""));
        // line 545
        yield "    ";
        $context["has_help"] = (( !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 545, $this->source); })()), "help", [], "any", false, false, false, 545) === false) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 545, $this->source); })()), "help", [], "any", false, false, false, 545))) &&  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 545, $this->source); })()), "help", [], "any", false, false, false, 545) === ""));
        // line 546
        yield "    ";
        $context["column_has_title"] = ((((isset($context["field_icon"]) || array_key_exists("field_icon", $context) ? $context["field_icon"] : (function () { throw new RuntimeError('Variable "field_icon" does not exist.', 546, $this->source); })()) != null) || (isset($context["has_label"]) || array_key_exists("has_label", $context) ? $context["has_label"] : (function () { throw new RuntimeError('Variable "has_label" does not exist.', 546, $this->source); })())) || (isset($context["has_help"]) || array_key_exists("has_help", $context) ? $context["has_help"] : (function () { throw new RuntimeError('Variable "has_help" does not exist.', 546, $this->source); })()));
        // line 547
        yield "
    <div class=\"form-column ";
        // line 548
        yield (((($tmp =  !(isset($context["column_has_title"]) || array_key_exists("column_has_title", $context) ? $context["column_has_title"] : (function () { throw new RuntimeError('Variable "column_has_title" does not exist.', 548, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-column-no-header") : (""));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 548, $this->source); })()), "cssClass", [], "any", false, false, false, 548), "html", null, true);
        yield "\">
        ";
        // line 549
        if ((($tmp = (isset($context["column_has_title"]) || array_key_exists("column_has_title", $context) ? $context["column_has_title"] : (function () { throw new RuntimeError('Variable "column_has_title" does not exist.', 549, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 550
            yield "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
            // line 552
            if ((($tmp = (isset($context["field_icon"]) || array_key_exists("field_icon", $context) ? $context["field_icon"] : (function () { throw new RuntimeError('Variable "field_icon" does not exist.', 552, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => (isset($context["field_icon"]) || array_key_exists("field_icon", $context) ? $context["field_icon"] : (function () { throw new RuntimeError('Variable "field_icon" does not exist.', 552, $this->source); })()), "class" => "form-column-icon"]);
            }
            // line 553
            yield "                    ";
            if ((($tmp = (isset($context["has_label"]) || array_key_exists("has_label", $context) ? $context["has_label"] : (function () { throw new RuntimeError('Variable "has_label" does not exist.', 553, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 553, $this->source); })()), "label", [], "any", false, false, false, 553), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 553), "translationDomain", [], "any", false, false, false, 553));
            }
            // line 554
            yield "                </div>

                ";
            // line 556
            if ((($tmp = (isset($context["has_help"]) || array_key_exists("has_help", $context) ? $context["has_help"] : (function () { throw new RuntimeError('Variable "has_help" does not exist.', 556, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 557
                yield "                    <div class=\"form-column-help\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 557, $this->source); })()), "help", [], "any", false, false, false, 557), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 557), "translationDomain", [], "any", false, false, false, 557));
                yield "</div>
                ";
            }
            // line 559
            yield "            </div>
        ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 563
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_column_close_row"));

        // line 564
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 567
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_ealabel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_fieldset_open_ealabel"));

        // line 568
        yield "    ";
        if ((($tmp = (isset($context["ea_is_collapsible"]) || array_key_exists("ea_is_collapsible", $context) ? $context["ea_is_collapsible"] : (function () { throw new RuntimeError('Variable "ea_is_collapsible" does not exist.', 568, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 569
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
            yield "
    ";
        }
        // line 571
        yield "
    ";
        // line 572
        if ((($tmp = (isset($context["ea_icon"]) || array_key_exists("ea_icon", $context) ? $context["ea_icon"] : (function () { throw new RuntimeError('Variable "ea_icon" does not exist.', 572, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 573
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => (isset($context["ea_icon"]) || array_key_exists("ea_icon", $context) ? $context["ea_icon"] : (function () { throw new RuntimeError('Variable "ea_icon" does not exist.', 573, $this->source); })()), "class" => "form-fieldset-icon"]);
            yield "
    ";
        }
        // line 575
        yield "
    ";
        // line 576
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 576, $this->source); })()), "vars", [], "any", false, false, false, 576), "label", [], "any", false, false, false, 576));
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 579
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_fieldset_open_label"));

        // line 580
        yield "    ";
        // line 581
        yield "    ";
        $context["has_help"] = (( !((isset($context["ea_help"]) || array_key_exists("ea_help", $context) ? $context["ea_help"] : (function () { throw new RuntimeError('Variable "ea_help" does not exist.', 581, $this->source); })()) === false) &&  !(null === (isset($context["ea_help"]) || array_key_exists("ea_help", $context) ? $context["ea_help"] : (function () { throw new RuntimeError('Variable "ea_help" does not exist.', 581, $this->source); })()))) &&  !((isset($context["ea_help"]) || array_key_exists("ea_help", $context) ? $context["ea_help"] : (function () { throw new RuntimeError('Variable "ea_help" does not exist.', 581, $this->source); })()) === ""));
        // line 582
        yield "    ";
        $context["collapsed_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSED");
        // line 583
        yield "    ";
        $context["fieldset_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_FIELDSET_ERROR_COUNT");
        // line 584
        yield "    ";
        $context["fieldset_error_count"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 584), "ea_vars", [], "any", false, true, false, 584), "field", [], "any", false, true, false, 584), "getCustomOption", [(isset($context["fieldset_error_count_option_name"]) || array_key_exists("fieldset_error_count_option_name", $context) ? $context["fieldset_error_count_option_name"] : (function () { throw new RuntimeError('Variable "fieldset_error_count_option_name" does not exist.', 584, $this->source); })())], "method", true, true, false, 584)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 584, $this->source); })()), "vars", [], "any", false, false, false, 584), "ea_vars", [], "any", false, false, false, 584), "field", [], "any", false, false, false, 584), "getCustomOption", [(isset($context["fieldset_error_count_option_name"]) || array_key_exists("fieldset_error_count_option_name", $context) ? $context["fieldset_error_count_option_name"] : (function () { throw new RuntimeError('Variable "fieldset_error_count_option_name" does not exist.', 584, $this->source); })())], "method", false, false, false, 584), 0)) : (0));
        // line 585
        yield "    ";
        $context["is_collapsed"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 585), "ea_vars", [], "any", false, true, false, 585), "field", [], "any", false, true, false, 585), "getCustomOption", [(isset($context["collapsed_option_name"]) || array_key_exists("collapsed_option_name", $context) ? $context["collapsed_option_name"] : (function () { throw new RuntimeError('Variable "collapsed_option_name" does not exist.', 585, $this->source); })())], "method", true, true, false, 585)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 585, $this->source); })()), "vars", [], "any", false, false, false, 585), "ea_vars", [], "any", false, false, false, 585), "field", [], "any", false, false, false, 585), "getCustomOption", [(isset($context["collapsed_option_name"]) || array_key_exists("collapsed_option_name", $context) ? $context["collapsed_option_name"] : (function () { throw new RuntimeError('Variable "collapsed_option_name" does not exist.', 585, $this->source); })())], "method", false, false, false, 585), false)) : (false));
        // line 586
        yield "
    <div class=\"form-fieldset-header ";
        // line 587
        yield (((($tmp = (isset($context["ea_is_collapsible"]) || array_key_exists("ea_is_collapsible", $context) ? $context["ea_is_collapsible"] : (function () { throw new RuntimeError('Variable "ea_is_collapsible" does not exist.', 587, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
        yield " ";
        yield (((($tmp = (isset($context["has_help"]) || array_key_exists("has_help", $context) ? $context["has_help"] : (function () { throw new RuntimeError('Variable "has_help" does not exist.', 587, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
        yield "\">
        <div class=\"form-fieldset-title\">
            ";
        // line 589
        if ((($tmp = (isset($context["ea_is_collapsible"]) || array_key_exists("ea_is_collapsible", $context) ? $context["ea_is_collapsible"] : (function () { throw new RuntimeError('Variable "ea_is_collapsible" does not exist.', 589, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 590
            yield "                <a href=\"#content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "vars", [], "any", false, false, false, 590), "name", [], "any", false, false, false, 590), "html", null, true);
            yield "\" data-bs-toggle=\"collapse\"
                   class=\"form-fieldset-title-content form-fieldset-collapse ";
            // line 591
            yield (((($tmp = (isset($context["is_collapsed"]) || array_key_exists("is_collapsed", $context) ? $context["is_collapsed"] : (function () { throw new RuntimeError('Variable "is_collapsed" does not exist.', 591, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
            yield "\"
                   aria-expanded=\"";
            // line 592
            yield (((($tmp = (isset($context["is_collapsed"]) || array_key_exists("is_collapsed", $context) ? $context["is_collapsed"] : (function () { throw new RuntimeError('Variable "is_collapsed" does not exist.', 592, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
            yield "\" aria-controls=\"content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 592, $this->source); })()), "vars", [], "any", false, false, false, 592), "name", [], "any", false, false, false, 592), "html", null, true);
            yield "\">
                    ";
            // line 593
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 593, $this->source); })()), 'ealabel');
            // line 594
            if (((isset($context["fieldset_error_count"]) || array_key_exists("fieldset_error_count", $context) ? $context["fieldset_error_count"] : (function () { throw new RuntimeError('Variable "fieldset_error_count" does not exist.', 594, $this->source); })()) > 0)) {
                // line 595
                yield "<span class=\"badge badge-danger\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => (isset($context["fieldset_error_count"]) || array_key_exists("fieldset_error_count", $context) ? $context["fieldset_error_count"] : (function () { throw new RuntimeError('Variable "fieldset_error_count" does not exist.', 595, $this->source); })())], "EasyAdminBundle"), "html", null, true);
                yield "\">";
                // line 596
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fieldset_error_count"]) || array_key_exists("fieldset_error_count", $context) ? $context["fieldset_error_count"] : (function () { throw new RuntimeError('Variable "fieldset_error_count" does not exist.', 596, $this->source); })()), "html", null, true);
                // line 597
                yield "</span>";
            }
            // line 599
            yield "</a>
            ";
        } else {
            // line 601
            yield "                <span class=\"not-collapsible form-fieldset-title-content\">
                    ";
            // line 602
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 602, $this->source); })()), 'ealabel');
            // line 603
            if (((isset($context["fieldset_error_count"]) || array_key_exists("fieldset_error_count", $context) ? $context["fieldset_error_count"] : (function () { throw new RuntimeError('Variable "fieldset_error_count" does not exist.', 603, $this->source); })()) > 0)) {
                // line 604
                yield "<span class=\"badge badge-danger\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => (isset($context["fieldset_error_count"]) || array_key_exists("fieldset_error_count", $context) ? $context["fieldset_error_count"] : (function () { throw new RuntimeError('Variable "fieldset_error_count" does not exist.', 604, $this->source); })())], "EasyAdminBundle"), "html", null, true);
                yield "\">";
                // line 605
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fieldset_error_count"]) || array_key_exists("fieldset_error_count", $context) ? $context["fieldset_error_count"] : (function () { throw new RuntimeError('Variable "fieldset_error_count" does not exist.', 605, $this->source); })()), "html", null, true);
                // line 606
                yield "</span>";
            }
            // line 608
            yield "</span>
            ";
        }
        // line 610
        yield "
            ";
        // line 611
        if ((($tmp = (isset($context["has_help"]) || array_key_exists("has_help", $context) ? $context["has_help"] : (function () { throw new RuntimeError('Variable "has_help" does not exist.', 611, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 612
            yield "                <div class=\"form-fieldset-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["ea_help"]) || array_key_exists("ea_help", $context) ? $context["ea_help"] : (function () { throw new RuntimeError('Variable "ea_help" does not exist.', 612, $this->source); })()));
            yield "</div>
            ";
        }
        // line 614
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 618
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_fieldset_open_row"));

        // line 619
        yield "    ";
        // line 620
        yield "    ";
        $context["has_help"] = (( !((isset($context["ea_help"]) || array_key_exists("ea_help", $context) ? $context["ea_help"] : (function () { throw new RuntimeError('Variable "ea_help" does not exist.', 620, $this->source); })()) === false) &&  !(null === (isset($context["ea_help"]) || array_key_exists("ea_help", $context) ? $context["ea_help"] : (function () { throw new RuntimeError('Variable "ea_help" does not exist.', 620, $this->source); })()))) &&  !((isset($context["ea_help"]) || array_key_exists("ea_help", $context) ? $context["ea_help"] : (function () { throw new RuntimeError('Variable "ea_help" does not exist.', 620, $this->source); })()) === ""));
        // line 621
        yield "    ";
        // line 622
        yield "    ";
        $context["has_label"] = (( !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 622, $this->source); })()), "vars", [], "any", false, false, false, 622), "label", [], "any", false, false, false, 622) === false) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 622, $this->source); })()), "vars", [], "any", false, false, false, 622), "label", [], "any", false, false, false, 622))) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 622, $this->source); })()), "vars", [], "any", false, false, false, 622), "label", [], "any", false, false, false, 622) === ""));
        // line 623
        yield "    ";
        $context["fieldset_has_header"] = (((isset($context["has_label"]) || array_key_exists("has_label", $context) ? $context["has_label"] : (function () { throw new RuntimeError('Variable "has_label" does not exist.', 623, $this->source); })()) || (isset($context["ea_icon"]) || array_key_exists("ea_icon", $context) ? $context["ea_icon"] : (function () { throw new RuntimeError('Variable "ea_icon" does not exist.', 623, $this->source); })())) || (isset($context["has_help"]) || array_key_exists("has_help", $context) ? $context["has_help"] : (function () { throw new RuntimeError('Variable "has_help" does not exist.', 623, $this->source); })()));
        // line 624
        yield "    ";
        $context["collapsed_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSED");
        // line 625
        yield "    ";
        $context["fieldset_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_FIELDSET_ERROR_COUNT");
        // line 626
        yield "    ";
        $context["fieldset_has_errors"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 626), "ea_vars", [], "any", false, true, false, 626), "field", [], "any", false, true, false, 626), "getCustomOption", [(isset($context["fieldset_error_count_option_name"]) || array_key_exists("fieldset_error_count_option_name", $context) ? $context["fieldset_error_count_option_name"] : (function () { throw new RuntimeError('Variable "fieldset_error_count_option_name" does not exist.', 626, $this->source); })())], "method", true, true, false, 626)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 626, $this->source); })()), "vars", [], "any", false, false, false, 626), "ea_vars", [], "any", false, false, false, 626), "field", [], "any", false, false, false, 626), "getCustomOption", [(isset($context["fieldset_error_count_option_name"]) || array_key_exists("fieldset_error_count_option_name", $context) ? $context["fieldset_error_count_option_name"] : (function () { throw new RuntimeError('Variable "fieldset_error_count_option_name" does not exist.', 626, $this->source); })())], "method", false, false, false, 626), 0)) : (0)) > 0);
        // line 627
        yield "    ";
        $context["is_collapsed"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 627), "ea_vars", [], "any", false, true, false, 627), "field", [], "any", false, true, false, 627), "getCustomOption", [(isset($context["collapsed_option_name"]) || array_key_exists("collapsed_option_name", $context) ? $context["collapsed_option_name"] : (function () { throw new RuntimeError('Variable "collapsed_option_name" does not exist.', 627, $this->source); })())], "method", true, true, false, 627)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 627, $this->source); })()), "vars", [], "any", false, false, false, 627), "ea_vars", [], "any", false, false, false, 627), "field", [], "any", false, false, false, 627), "getCustomOption", [(isset($context["collapsed_option_name"]) || array_key_exists("collapsed_option_name", $context) ? $context["collapsed_option_name"] : (function () { throw new RuntimeError('Variable "collapsed_option_name" does not exist.', 627, $this->source); })())], "method", false, false, false, 627), false)) : (false));
        // line 628
        yield "
    <div class=\"form-fieldset ";
        // line 629
        yield (((($tmp =  !(isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 629, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-fieldset-no-header") : (""));
        yield " ";
        yield (((($tmp = (isset($context["fieldset_has_errors"]) || array_key_exists("fieldset_has_errors", $context) ? $context["fieldset_has_errors"] : (function () { throw new RuntimeError('Variable "fieldset_has_errors" does not exist.', 629, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-fieldset-error") : (""));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ea_css_class"]) || array_key_exists("ea_css_class", $context) ? $context["ea_css_class"] : (function () { throw new RuntimeError('Variable "ea_css_class" does not exist.', 629, $this->source); })()), "html", null, true);
        yield "\">
        <fieldset>
            ";
        // line 631
        if ((($tmp = (isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 631, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 632
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 632, $this->source); })()), 'label');
            yield "
            ";
        }
        // line 634
        yield "
            <div id=\"content-";
        // line 635
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 635, $this->source); })()), "vars", [], "any", false, false, false, 635), "name", [], "any", false, false, false, 635), "html", null, true);
        yield "\" class=\"form-fieldset-body ";
        yield (((($tmp =  !(isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 635, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
        yield " ";
        yield (((($tmp = (isset($context["ea_is_collapsible"]) || array_key_exists("ea_is_collapsible", $context) ? $context["ea_is_collapsible"] : (function () { throw new RuntimeError('Variable "ea_is_collapsible" does not exist.', 635, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
        yield " ";
        yield (((($tmp =  !(isset($context["is_collapsed"]) || array_key_exists("is_collapsed", $context) ? $context["is_collapsed"] : (function () { throw new RuntimeError('Variable "is_collapsed" does not exist.', 635, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\">
                <div class=\"row\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 639
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_fieldset_close_row"));

        // line 640
        yield "                </div>
            </div>
        </fieldset>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 646
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tablist_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_tablist_row"));

        // line 647
        yield "    ";
        $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
        // line 648
        yield "    ";
        $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 649
        yield "    ";
        $context["tab_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
        // line 650
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 650, $this->source); })()), "vars", [], "any", false, false, false, 650), "ea_vars", [], "any", false, false, false, 650), "field", [], "any", false, false, false, 650);
        // line 651
        yield "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 654
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 654, $this->source); })()), "getCustomOption", ["tabs"], "method", false, false, false, 654));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 655
            yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
            // line 656
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [(isset($context["tab_is_active_option_name"]) || array_key_exists("tab_is_active_option_name", $context) ? $context["tab_is_active_option_name"] : (function () { throw new RuntimeError('Variable "tab_is_active_option_name" does not exist.', 656, $this->source); })())], "method", false, false, false, 656)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [(isset($context["tab_id_option_name"]) || array_key_exists("tab_id_option_name", $context) ? $context["tab_id_option_name"] : (function () { throw new RuntimeError('Variable "tab_id_option_name" does not exist.', 656, $this->source); })())], "method", false, false, false, 656), "html", null, true);
            yield "\" id=\"tablist-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [(isset($context["tab_id_option_name"]) || array_key_exists("tab_id_option_name", $context) ? $context["tab_id_option_name"] : (function () { throw new RuntimeError('Variable "tab_id_option_name" does not exist.', 656, $this->source); })())], "method", false, false, false, 656), "html", null, true);
            yield "\" data-bs-toggle=\"tab\">";
            // line 657
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 657)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 657), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 658
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 658), "class" => "tab-nav-item-icon"]);
            }
            // line 660
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 660), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 660), "translationDomain", [], "any", false, false, false, 660));
            yield "

                        ";
            // line 662
            $context["tab_error_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [(isset($context["tab_error_count_option_name"]) || array_key_exists("tab_error_count_option_name", $context) ? $context["tab_error_count_option_name"] : (function () { throw new RuntimeError('Variable "tab_error_count_option_name" does not exist.', 662, $this->source); })())], "method", false, false, false, 662);
            // line 663
            if (((isset($context["tab_error_count"]) || array_key_exists("tab_error_count", $context) ? $context["tab_error_count"] : (function () { throw new RuntimeError('Variable "tab_error_count" does not exist.', 663, $this->source); })()) > 0)) {
                // line 664
                yield "<span class=\"badge badge-danger\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => (isset($context["tab_error_count"]) || array_key_exists("tab_error_count", $context) ? $context["tab_error_count"] : (function () { throw new RuntimeError('Variable "tab_error_count" does not exist.', 664, $this->source); })())], "EasyAdminBundle"), "html", null, true);
                yield "\">";
                // line 665
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tab_error_count"]) || array_key_exists("tab_error_count", $context) ? $context["tab_error_count"] : (function () { throw new RuntimeError('Variable "tab_error_count" does not exist.', 665, $this->source); })()), "html", null, true);
                // line 666
                yield "</span>";
            }
            // line 668
            yield "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 671
        yield "        </ul>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 675
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_group_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_tabpane_group_open_row"));

        // line 676
        yield "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 680
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_group_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_tabpane_group_close_row"));

        // line 681
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 685
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_tabpane_open_row"));

        // line 686
        yield "    ";
        $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 687
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 687, $this->source); })()), "vars", [], "any", false, false, false, 687), "ea_vars", [], "any", false, false, false, 687), "field", [], "any", false, false, false, 687);
        // line 688
        yield "
    <div id=\"";
        // line 689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ea_tab_id"]) || array_key_exists("ea_tab_id", $context) ? $context["ea_tab_id"] : (function () { throw new RuntimeError('Variable "ea_tab_id" does not exist.', 689, $this->source); })()), "html", null, true);
        yield "\" class=\"tab-pane ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 689, $this->source); })()), "getCustomOption", [(isset($context["tab_is_active_option_name"]) || array_key_exists("tab_is_active_option_name", $context) ? $context["tab_is_active_option_name"] : (function () { throw new RuntimeError('Variable "tab_is_active_option_name" does not exist.', 689, $this->source); })())], "method", false, false, false, 689)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "active";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ea_css_class"]) || array_key_exists("ea_css_class", $context) ? $context["ea_css_class"] : (function () { throw new RuntimeError('Variable "ea_css_class" does not exist.', 689, $this->source); })()), "html", null, true);
        yield "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 689, $this->source); })()), "vars", [], "any", false, false, false, 689), "attr", [], "any", false, false, false, 689));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html");
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
        ";
        // line 690
        if ((($tmp = (isset($context["ea_help"]) || array_key_exists("ea_help", $context) ? $context["ea_help"] : (function () { throw new RuntimeError('Variable "ea_help" does not exist.', 690, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 691
            yield "            <div class=\"content-header-help tab-help\">
                ";
            // line 692
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["ea_help"]) || array_key_exists("ea_help", $context) ? $context["ea_help"] : (function () { throw new RuntimeError('Variable "ea_help" does not exist.', 692, $this->source); })()), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 692), "translationDomain", [], "any", false, false, false, 692));
            yield "
            </div>
        ";
        }
        // line 695
        yield "
        <div class=\"row\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 699
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_tabpane_close_row"));

        // line 700
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 705
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_filters_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_filters_widget"));

        // line 706
        yield "    ";
        $context["applied_filters"] = Twig\Extension\CoreExtension::keys(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "request", [], "any", false, true, false, 706), "query", [], "any", false, true, false, 706), "all", [], "method", false, true, false, 706), "filters", [], "array", true, true, false, 706)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "request", [], "any", false, false, false, 706), "query", [], "any", false, false, false, 706), "all", [], "method", false, false, false, 706), "filters", [], "array", false, false, false, 706), [])) : ([])));
        // line 707
        yield "
    ";
        // line 708
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 708, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 709
            yield "        <div class=\"col-12\">
            <div class=\"filter-field px-3\" data-filter-property=\"";
            // line 710
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 710), "name", [], "any", false, false, false, 710), "html", null, true);
            yield "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 711
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 711), "html", null, true);
            yield "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 712
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 712), "name", [], "any", false, false, false, 712), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 712, $this->source); })()))) {
                yield "checked";
            }
            yield ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 713
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 713), "html", null, true);
            yield "\" aria-expanded=\"";
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 713), "name", [], "any", false, false, false, 713), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 713, $this->source); })()))) ? ("true") : ("false"));
            yield "\" aria-controls=\"filter-content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 713), "html", null, true);
            yield "\"
                        ";
            // line 714
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 714), "label_attr", [], "any", true, true, false, 714)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 714), "label_attr", [], "any", false, false, false, 714), [])) : ([])));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
                        ";
            // line 716
            yield "                        ";
            $context["has_filter_label"] = (( !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 716), "label", [], "any", false, false, false, 716) === false) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 716), "label", [], "any", false, false, false, 716))) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 716), "label", [], "any", false, false, false, 716) === ""));
            // line 717
            yield "                        ";
            $context["filter_label"] = (((($tmp = (isset($context["has_filter_label"]) || array_key_exists("has_filter_label", $context) ? $context["has_filter_label"] : (function () { throw new RuntimeError('Variable "has_filter_label" does not exist.', 717, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 717), "label", [], "any", false, false, false, 717)) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 717), "name", [], "any", false, false, false, 717))));
            // line 718
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["filter_label"]) || array_key_exists("filter_label", $context) ? $context["filter_label"] : (function () { throw new RuntimeError('Variable "filter_label" does not exist.', 718, $this->source); })()), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "i18n", [], "any", false, false, false, 718), "translationDomain", [], "any", false, false, false, 718)), "html", null, true);
            yield "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 721
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 721), "html", null, true);
            yield "\" class=\"filter-content collapse ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 721), "name", [], "any", false, false, false, 721), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 721, $this->source); })()))) {
                yield "show";
            }
            yield "\" aria-labelledby=\"filter-heading-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 721), "html", null, true);
            yield "\">
                    <div class=\"form-widget\">
                        ";
            // line 723
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            yield "
                    </div>
                </div>
            </div>
        </div>
    ";
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
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 731
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_comparison_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comparison_widget"));

        // line 732
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 732, $this->source); })()), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 732, $this->source); })()), "vars", [], "any", false, false, false, 732), "attr", [], "any", false, false, false, 732), ["data-ea-comparison-id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 732, $this->source); })()), "vars", [], "any", false, false, false, 732), "id", [], "any", false, false, false, 732)])]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 735
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_numeric_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_numeric_filter_widget"));

        // line 736
        yield "    <div class=\"form-widget-compound\">
        ";
        // line 737
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 737, $this->source); })()), "comparison", [], "any", false, false, false, 737), 'row');
        yield "
        ";
        // line 738
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 738, $this->source); })()), "value", [], "any", false, false, false, 738), 'row');
        yield "
        <div data-ea-value2-of-comparison-id=\"";
        // line 739
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 739, $this->source); })()), "comparison", [], "any", false, false, false, 739), "vars", [], "any", false, false, false, 739), "id", [], "any", false, false, false, 739), "html", null, true);
        yield "\" class=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 739, $this->source); })()), "comparison", [], "any", false, false, false, 739), "vars", [], "any", false, false, false, 739), "value", [], "any", false, false, false, 739) != "between")) ? ("d-none") : (""));
        yield "\">
            ";
        // line 740
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 740, $this->source); })()), "value2", [], "any", false, false, false, 740), 'row');
        yield "
        </div>
    </div>";
        // line 743
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 743, $this->source); })()), 'errors');
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 746
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_datetime_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_datetime_filter_widget"));

        // line 747
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("ea_numeric_filter_widget", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 750
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_fileupload_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_fileupload_widget"));

        // line 751
        yield "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 753
        $context["placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.choose_file", [], "EasyAdminBundle");
        // line 754
        yield "            ";
        $context["title"] = "";
        // line 755
        yield "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 756
        yield "            ";
        if ((($tmp = (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 756, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 757
            yield "                ";
            if ((($tmp = (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 757, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 758
                yield "                    ";
                $context["placeholder"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 758, $this->source); })())) . " ") . (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 758, $this->source); })()));
                // line 759
                yield "                ";
            } else {
                // line 760
                yield "                    ";
                $context["placeholder"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 760, $this->source); })())), "filename", [], "any", false, false, false, 760);
                // line 761
                yield "                    ";
                $context["title"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 761, $this->source); })())), "mTime", [], "any", false, false, false, 761));
                // line 762
                yield "                ";
            }
            // line 763
            yield "            ";
        }
        // line 764
        yield "            <div class=\"custom-file\">
                ";
        // line 765
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 765, $this->source); })()), "file", [], "any", false, false, false, 765), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 765, $this->source); })()), "file", [], "any", false, false, false, 765), "vars", [], "any", false, false, false, 765), "attr", [], "any", false, false, false, 765), ["placeholder" => (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 765, $this->source); })()), "title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 765, $this->source); })()), "data-files-label" => (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 765, $this->source); })()), "class" => "d-none"])]);
        yield "
                ";
        // line 767
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 767, $this->source); })()), "file", [], "any", false, false, false, 767), 'label', ["label" => (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 767, $this->source); })()), "label_attr" => ["class" => "custom-file-label"]]);
        yield "
            </div>
            <div class=\"input-group-text\">";
        // line 770
        if ((($tmp = (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 770, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 771
            if ((($tmp = (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 771, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 772
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 772, $this->source); })()), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 772, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 772, $this->source); })()), "size", [], "any", false, false, false, 772)); })), "html", null, true);
                yield "
                    ";
            } else {
                // line 774
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 774, $this->source); })())), "size", [], "any", false, false, false, 774)), "html", null, true);
                yield "
                    ";
            }
        }
        // line 777
        if ((($tmp = (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 777, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 778
            yield "                    <label class=\"btn ea-fileupload-delete-btn ";
            yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 778, $this->source); })()))) ? ("d-none") : (""));
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 778, $this->source); })()), "delete", [], "any", false, false, false, 778), "vars", [], "any", false, false, false, 778), "id", [], "any", false, false, false, 778), "html", null, true);
            yield "\">
                        ";
            // line 779
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
                    </label>
                ";
        }
        // line 782
        yield "                <label class=\"btn\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 782, $this->source); })()), "file", [], "any", false, false, false, 782), "vars", [], "any", false, false, false, 782), "id", [], "any", false, false, false, 782), "html", null, true);
        yield "\">
                    ";
        // line 783
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:folder-open"]);
        yield "
                </label>
            </div>
        </div>
        ";
        // line 787
        if (((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 787, $this->source); })()) && (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 787, $this->source); })()))) {
            // line 788
            yield "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 791
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 791, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 792
                yield "                        <tr>
                            <td>
                                ";
                // line 794
                if ((($tmp = (isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 794, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 794, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 794))), "html", null, true);
                    yield "\">";
                }
                // line 795
                yield "                                    <span title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 795)), "html", null, true);
                yield "\">
                                        ";
                // line 796
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 796), "html", null, true);
                yield "
                                    </span>
                                ";
                // line 798
                if ((($tmp = (isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 798, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</a>";
                }
                // line 799
                yield "                            </td>
                            <td class=\"text-right file-size\">";
                // line 800
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 800)), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 803
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 807
        yield "        ";
        if ((($tmp = (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 807, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 808
            yield "            <div class=\"d-none\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 808, $this->source); })()), "delete", [], "any", false, false, false, 808), 'widget', ["label" => false]);
            yield "</div>
        ";
        }
        // line 810
        yield "    </div>
    ";
        // line 811
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 811, $this->source); })()), "file", [], "any", false, false, false, 811), 'errors');
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 814
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_TODO_ea_fileupload_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "TODO_ea_fileupload_widget"));

        // line 815
        yield "    ";
        $context["placeholder"] = "";
        // line 816
        yield "    ";
        $context["title"] = "";
        // line 817
        yield "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 818
        yield "    ";
        if ((($tmp = (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 818, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 819
            yield "        ";
            if ((($tmp = (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 819, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 820
                yield "            ";
                $context["placeholder"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 820, $this->source); })())) . " ") . (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 820, $this->source); })()));
                // line 821
                yield "        ";
            } else {
                // line 822
                yield "            ";
                $context["placeholder"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 822, $this->source); })())), "filename", [], "any", false, false, false, 822);
                // line 823
                yield "            ";
                $context["title"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 823, $this->source); })())), "mTime", [], "any", false, false, false, 823));
                // line 824
                yield "        ";
            }
            // line 825
            yield "    ";
        }
        // line 826
        yield "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 829
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 829, $this->source); })()), "file", [], "any", false, false, false, 829), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 829, $this->source); })()), "file", [], "any", false, false, false, 829), "vars", [], "any", false, false, false, 829), "attr", [], "any", false, false, false, 829), ["placeholder" => (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 829, $this->source); })()), "title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 829, $this->source); })()), "data-files-label" => (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 829, $this->source); })()), "class" => "form-control"])]);
        yield "

            ";
        // line 831
        if ((($tmp = (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 831, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 832
            yield "                <span class=\"input-group-text\">
                    ";
            // line 833
            if ((($tmp = (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 833, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 834
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 834, $this->source); })()), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 834, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 834, $this->source); })()), "size", [], "any", false, false, false, 834)); })), "html", null, true);
                yield "
                    ";
            } else {
                // line 836
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 836, $this->source); })())), "size", [], "any", false, false, false, 836)), "html", null, true);
                yield "
                    ";
            }
            // line 838
            yield "                </span>
            ";
        }
        // line 840
        yield "
            ";
        // line 841
        if (((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 841, $this->source); })()) && (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 841, $this->source); })()))) {
            // line 842
            yield "                <button class=\"btn ea-fileupload-delete-btn\">
                    ";
            // line 843
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
                </button>
            ";
        }
        // line 846
        yield "
            ";
        // line 847
        if ((($tmp = (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 847, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 848
            yield "                <button class=\"btn\">
                    ";
            // line 849
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:folder-open"]);
            yield "
                </button>
            ";
        }
        // line 852
        yield "        </div>

        ";
        // line 854
        if (((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 854, $this->source); })()) && (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 854, $this->source); })()))) {
            // line 855
            yield "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 858
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 858, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 859
                yield "                        <tr>
                            <td>
                                ";
                // line 861
                if ((($tmp = (isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 861, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 861, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 861))), "html", null, true);
                    yield "\">";
                }
                // line 862
                yield "                                    <span title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 862)), "html", null, true);
                yield "\">
                                        ";
                // line 863
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 863), "html", null, true);
                yield "
                                    </span>
                                    ";
                // line 865
                if ((($tmp = (isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 865, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</a>";
                }
                // line 866
                yield "                            </td>
                            <td class=\"text-right file-size\">";
                // line 867
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 867)), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 870
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 874
        yield "        ";
        if ((($tmp = (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 874, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 875
            yield "            <div class=\"d-none\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 875, $this->source); })()), "delete", [], "any", false, false, false, 875), 'widget', ["label" => false]);
            yield "</div>
        ";
        }
        // line 877
        yield "    </div>

    ";
        // line 879
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 879, $this->source); })()), "file", [], "any", false, false, false, 879), 'errors');
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 882
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_slug_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_slug_widget"));

        // line 883
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 883, $this->source); })()), ["data-ea-slug-field" => "", "data-target" => json_encode(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(),         // line 885
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 885, $this->source); })()), "|"), function ($__name__) use ($context, $macros) { $context["name"] = $__name__; return CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 885, $this->source); })()), "parent", [], "any", false, false, false, 885), "children", [], "any", false, false, false, 885), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 885, $this->source); })()), [], "array", false, false, false, 885), "vars", [], "any", false, false, false, 885), "id", [], "any", false, false, false, 885); }))]);
        // line 887
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-confirm-text", [], "array", true, true, false, 887)) {
            // line 888
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 888, $this->source); })()), ["data-confirm-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source,             // line 889
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 889, $this->source); })()), "data-confirm-text", [], "array", false, false, false, 889))]);
            // line 891
            yield "    ";
        }
        // line 892
        yield "
    <div class=\"input-group\">
        ";
        // line 894
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        yield "
        <button type=\"button\" class=\"btn\"
                data-icon-locked=\"";
        // line 896
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock"]), "html");
        yield "\"
                data-icon-unlocked=\"";
        // line 897
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock-open-solid"]), "html");
        yield "\">
            ";
        // line 898
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock"]);
        yield "
        </button>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 470
    public function macro_recursiveFieldsetForm($form = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "recursiveFieldsetForm"));

            // line 471
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 471, $this->source); })()), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!CoreExtension::inFilter("hidden", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 471), "block_prefixes", [], "any", false, false, false, 471)) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 471), "ea_crud_form", [], "any", false, true, false, 471), "form_tab", [], "any", true, true, false, 471) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 471), "ea_crud_form", [], "any", false, false, false, 471), "form_tab", [], "any", false, false, false, 471)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 471), "ea_crud_form", [], "any", false, true, false, 471), "form_tabs", [], "any", true, true, false, 471))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 472
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 472), "ea_crud_form", [], "any", false, true, false, 472), "form_tabs", [], "any", true, true, false, 472)) {
                    // line 473
                    yield "                    ";
                    // line 474
                    yield "                    ";
                    yield $this->getTemplateForMacro("macro_recursiveFieldsetForm", $context, 474, $this->getSourceContext())->macro_recursiveFieldsetForm(...[$context["field"]]);
                    yield "
                ";
                } else {
                    // line 476
                    yield "                    ";
                    // line 477
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    yield "
                ";
                }
                // line 479
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 480
            yield "        ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
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
        return array (  3157 => 480,  3151 => 479,  3145 => 477,  3143 => 476,  3137 => 474,  3135 => 473,  3132 => 472,  3127 => 471,  3112 => 470,  3100 => 898,  3096 => 897,  3092 => 896,  3087 => 894,  3083 => 892,  3080 => 891,  3078 => 889,  3076 => 888,  3073 => 887,  3071 => 885,  3069 => 883,  3059 => 882,  3049 => 879,  3045 => 877,  3039 => 875,  3036 => 874,  3030 => 870,  3021 => 867,  3018 => 866,  3014 => 865,  3007 => 863,  3002 => 862,  2996 => 861,  2992 => 859,  2988 => 858,  2983 => 855,  2981 => 854,  2977 => 852,  2971 => 849,  2968 => 848,  2966 => 847,  2963 => 846,  2957 => 843,  2954 => 842,  2952 => 841,  2949 => 840,  2945 => 838,  2939 => 836,  2933 => 834,  2931 => 833,  2928 => 832,  2926 => 831,  2921 => 829,  2916 => 826,  2913 => 825,  2910 => 824,  2907 => 823,  2904 => 822,  2901 => 821,  2898 => 820,  2895 => 819,  2892 => 818,  2889 => 817,  2886 => 816,  2883 => 815,  2873 => 814,  2863 => 811,  2860 => 810,  2854 => 808,  2851 => 807,  2845 => 803,  2836 => 800,  2833 => 799,  2829 => 798,  2822 => 796,  2817 => 795,  2811 => 794,  2807 => 792,  2803 => 791,  2798 => 788,  2796 => 787,  2789 => 783,  2784 => 782,  2778 => 779,  2771 => 778,  2769 => 777,  2762 => 774,  2756 => 772,  2754 => 771,  2752 => 770,  2746 => 767,  2742 => 765,  2739 => 764,  2736 => 763,  2733 => 762,  2730 => 761,  2727 => 760,  2724 => 759,  2721 => 758,  2718 => 757,  2715 => 756,  2712 => 755,  2709 => 754,  2707 => 753,  2703 => 751,  2693 => 750,  2682 => 747,  2672 => 746,  2664 => 743,  2659 => 740,  2653 => 739,  2649 => 738,  2645 => 737,  2642 => 736,  2632 => 735,  2621 => 732,  2611 => 731,  2585 => 723,  2574 => 721,  2567 => 718,  2564 => 717,  2561 => 716,  2547 => 714,  2539 => 713,  2533 => 712,  2529 => 711,  2525 => 710,  2522 => 709,  2505 => 708,  2502 => 707,  2499 => 706,  2489 => 705,  2479 => 700,  2469 => 699,  2459 => 695,  2453 => 692,  2450 => 691,  2448 => 690,  2426 => 689,  2423 => 688,  2420 => 687,  2417 => 686,  2407 => 685,  2397 => 681,  2387 => 680,  2377 => 676,  2367 => 675,  2357 => 671,  2349 => 668,  2346 => 666,  2344 => 665,  2340 => 664,  2338 => 663,  2336 => 662,  2331 => 660,  2328 => 658,  2326 => 657,  2317 => 656,  2314 => 655,  2310 => 654,  2305 => 651,  2302 => 650,  2299 => 649,  2296 => 648,  2293 => 647,  2283 => 646,  2271 => 640,  2261 => 639,  2244 => 635,  2241 => 634,  2235 => 632,  2233 => 631,  2224 => 629,  2221 => 628,  2218 => 627,  2215 => 626,  2212 => 625,  2209 => 624,  2206 => 623,  2203 => 622,  2201 => 621,  2198 => 620,  2196 => 619,  2186 => 618,  2176 => 614,  2170 => 612,  2168 => 611,  2165 => 610,  2161 => 608,  2158 => 606,  2156 => 605,  2152 => 604,  2150 => 603,  2148 => 602,  2145 => 601,  2141 => 599,  2138 => 597,  2136 => 596,  2132 => 595,  2130 => 594,  2128 => 593,  2122 => 592,  2118 => 591,  2113 => 590,  2111 => 589,  2104 => 587,  2101 => 586,  2098 => 585,  2095 => 584,  2092 => 583,  2089 => 582,  2086 => 581,  2084 => 580,  2074 => 579,  2064 => 576,  2061 => 575,  2055 => 573,  2053 => 572,  2050 => 571,  2044 => 569,  2041 => 568,  2031 => 567,  2022 => 564,  2012 => 563,  2002 => 559,  1996 => 557,  1994 => 556,  1990 => 554,  1985 => 553,  1981 => 552,  1977 => 550,  1975 => 549,  1969 => 548,  1966 => 547,  1963 => 546,  1960 => 545,  1957 => 544,  1955 => 543,  1952 => 542,  1949 => 541,  1939 => 540,  1929 => 536,  1926 => 535,  1924 => 533,  1914 => 532,  1904 => 528,  1901 => 527,  1899 => 526,  1889 => 525,  1878 => 522,  1868 => 521,  1857 => 516,  1853 => 515,  1849 => 513,  1847 => 512,  1846 => 511,  1844 => 509,  1834 => 508,  1825 => 504,  1823 => 503,  1822 => 502,  1821 => 501,  1820 => 500,  1819 => 499,  1817 => 497,  1807 => 496,  1796 => 492,  1793 => 491,  1783 => 490,  1772 => 487,  1762 => 486,  1747 => 481,  1745 => 470,  1743 => 469,  1735 => 465,  1729 => 464,  1723 => 462,  1720 => 461,  1716 => 460,  1705 => 458,  1702 => 457,  1697 => 454,  1691 => 452,  1689 => 451,  1682 => 448,  1676 => 446,  1674 => 445,  1671 => 444,  1665 => 442,  1663 => 441,  1660 => 440,  1653 => 438,  1649 => 437,  1644 => 436,  1640 => 434,  1638 => 433,  1630 => 431,  1628 => 430,  1623 => 428,  1620 => 427,  1617 => 426,  1615 => 425,  1612 => 424,  1609 => 423,  1604 => 422,  1601 => 421,  1598 => 420,  1588 => 419,  1578 => 416,  1575 => 415,  1572 => 414,  1562 => 413,  1547 => 408,  1542 => 407,  1532 => 406,  1521 => 402,  1511 => 401,  1500 => 397,  1497 => 396,  1491 => 394,  1489 => 393,  1483 => 390,  1477 => 389,  1474 => 388,  1470 => 385,  1464 => 383,  1457 => 380,  1455 => 379,  1452 => 378,  1449 => 377,  1443 => 374,  1439 => 373,  1433 => 370,  1429 => 369,  1426 => 368,  1423 => 367,  1417 => 364,  1414 => 363,  1411 => 362,  1409 => 361,  1406 => 360,  1403 => 359,  1393 => 358,  1382 => 355,  1379 => 354,  1369 => 353,  1358 => 349,  1355 => 348,  1349 => 346,  1347 => 345,  1341 => 342,  1335 => 341,  1332 => 340,  1328 => 337,  1322 => 335,  1315 => 332,  1313 => 331,  1310 => 330,  1306 => 328,  1303 => 326,  1300 => 324,  1298 => 323,  1296 => 322,  1291 => 321,  1289 => 320,  1286 => 319,  1276 => 318,  1265 => 315,  1262 => 314,  1252 => 313,  1241 => 309,  1238 => 308,  1228 => 307,  1217 => 301,  1213 => 298,  1210 => 296,  1208 => 295,  1204 => 292,  1201 => 290,  1199 => 289,  1197 => 288,  1182 => 287,  1178 => 284,  1175 => 281,  1174 => 280,  1173 => 279,  1171 => 278,  1169 => 277,  1167 => 274,  1164 => 272,  1162 => 271,  1159 => 269,  1156 => 267,  1154 => 266,  1152 => 265,  1149 => 261,  1139 => 260,  1131 => 255,  1129 => 254,  1123 => 253,  1113 => 252,  1102 => 248,  1099 => 247,  1096 => 246,  1093 => 245,  1090 => 244,  1087 => 243,  1081 => 241,  1078 => 240,  1075 => 239,  1073 => 237,  1071 => 236,  1068 => 235,  1058 => 234,  1049 => 231,  1040 => 225,  1032 => 222,  1029 => 221,  1023 => 219,  1021 => 218,  1015 => 215,  1011 => 214,  1005 => 213,  1001 => 211,  998 => 210,  992 => 208,  990 => 207,  986 => 206,  981 => 205,  979 => 204,  973 => 203,  970 => 202,  963 => 199,  959 => 198,  956 => 197,  953 => 196,  950 => 195,  947 => 194,  944 => 193,  941 => 192,  938 => 191,  928 => 190,  916 => 185,  912 => 184,  909 => 183,  907 => 182,  904 => 181,  901 => 180,  898 => 179,  896 => 178,  892 => 176,  886 => 173,  883 => 172,  877 => 170,  875 => 169,  870 => 168,  868 => 167,  864 => 165,  861 => 164,  858 => 163,  856 => 161,  846 => 160,  836 => 157,  833 => 156,  831 => 154,  830 => 153,  829 => 152,  828 => 151,  827 => 150,  826 => 148,  823 => 147,  817 => 146,  814 => 145,  811 => 144,  808 => 143,  805 => 142,  802 => 141,  799 => 140,  794 => 139,  792 => 138,  789 => 137,  786 => 136,  783 => 135,  780 => 134,  770 => 133,  760 => 130,  757 => 129,  754 => 128,  751 => 123,  748 => 122,  738 => 121,  728 => 117,  725 => 116,  719 => 111,  717 => 110,  711 => 107,  709 => 106,  704 => 105,  702 => 104,  699 => 103,  694 => 102,  688 => 100,  686 => 99,  681 => 97,  678 => 96,  672 => 93,  669 => 92,  666 => 91,  662 => 90,  659 => 89,  656 => 88,  653 => 87,  651 => 86,  648 => 85,  646 => 84,  634 => 83,  632 => 82,  629 => 81,  626 => 80,  623 => 79,  621 => 77,  619 => 76,  609 => 75,  600 => 69,  597 => 67,  595 => 66,  593 => 65,  583 => 64,  575 => 61,  573 => 60,  571 => 59,  561 => 58,  553 => 55,  551 => 54,  549 => 53,  539 => 52,  530 => 49,  528 => 48,  526 => 47,  523 => 45,  521 => 44,  511 => 43,  503 => 40,  500 => 38,  498 => 37,  496 => 36,  493 => 34,  491 => 33,  481 => 32,  472 => 27,  461 => 25,  456 => 24,  453 => 23,  443 => 22,  434 => 19,  428 => 17,  425 => 16,  415 => 15,  403 => 11,  401 => 10,  397 => 9,  394 => 8,  388 => 6,  385 => 5,  375 => 4,  367 => 882,  364 => 881,  362 => 814,  359 => 813,  357 => 750,  354 => 749,  352 => 746,  349 => 745,  347 => 735,  344 => 734,  342 => 731,  339 => 730,  337 => 705,  334 => 703,  332 => 699,  329 => 698,  327 => 685,  324 => 684,  322 => 680,  319 => 679,  317 => 675,  314 => 674,  312 => 646,  309 => 645,  307 => 639,  304 => 638,  302 => 618,  299 => 617,  297 => 579,  294 => 578,  292 => 567,  289 => 566,  287 => 563,  284 => 562,  282 => 540,  279 => 539,  277 => 532,  274 => 531,  272 => 525,  269 => 524,  267 => 521,  264 => 519,  262 => 508,  259 => 506,  257 => 496,  254 => 494,  252 => 490,  249 => 489,  247 => 486,  244 => 484,  242 => 419,  239 => 418,  237 => 413,  234 => 411,  232 => 406,  229 => 404,  227 => 401,  224 => 400,  222 => 358,  219 => 357,  217 => 353,  214 => 352,  212 => 318,  209 => 317,  207 => 313,  204 => 312,  202 => 307,  199 => 306,  196 => 304,  194 => 260,  191 => 259,  188 => 257,  186 => 252,  183 => 251,  181 => 234,  178 => 233,  176 => 190,  173 => 189,  171 => 160,  168 => 159,  166 => 133,  163 => 132,  161 => 121,  158 => 120,  156 => 75,  153 => 74,  150 => 72,  148 => 64,  145 => 63,  143 => 58,  140 => 57,  138 => 52,  135 => 51,  133 => 43,  130 => 42,  128 => 32,  125 => 31,  122 => 29,  120 => 22,  117 => 21,  115 => 15,  112 => 14,  110 => 4,  107 => 3,  35 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% use '@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig' %}

{% block form_start %}
    {% if form.vars.errors|length > 0 and 'ea_crud' in form.vars.block_prefixes|default([]) %}
        {{ form_errors(form, {attr: {errorClass: 'global-invalid-feedback'}}) }}
    {% endif %}

    {{ parent() }}
    {% if ea().request.query.get('referrer') %}
        <input type=\"hidden\" name=\"referrer\" value=\"{{ ea().request.query.get('referrer') }}\">
    {% endif %}
{% endblock form_start %}

{% block form_end %}
        {% if not render_rest is defined or render_rest %}
            {{ form_rest(form) }}
        {% endif %}
    </form>
{% endblock %}

{% block form_errors %}
    {% if errors|length > 0 %}
        {% for error in errors %}
            <div class=\"{{ attr.errorClass|default('') }} invalid-feedback d-block\">{{ error.message }}</div>
        {% endfor %}
    {% endif %}
{% endblock form_errors %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {% endif %}
    {%- if type is defined and (type == 'range' or type == 'color') %}
        {# Attribute \"required\" is not supported #}
        {%- set required = false -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block datetime_widget %}
    {%- if widget != 'single_text' -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    {%- endif -%}
    <div class=\"datetime-widget datetime-widget-datetime\">
        {{- parent() -}}
    </div>
{% endblock datetime_widget %}

{% block date_widget -%}
    <div class=\"datetime-widget datetime-widget-date\">
        {{- parent() -}}
    </div>
{%- endblock date_widget %}

{% block time_widget -%}
    <div class=\"datetime-widget datetime-widget-time\">
        {{- parent() -}}
    </div>
{%- endblock time_widget %}

{% block file_widget -%}
    {% if vich|default(false) %}
        {%- set type = type|default('file') -%}
        {{- block('form_widget_simple') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock %}

{# Rows #}

{% block form_row %}
    {% set row_attr = row_attr|merge({
        class: row_attr.class|default('') ~ ' form-group',
    }) %}
    {% set field = form.vars.ea_vars.field %}

    <div class=\"{{ field.columns ?? field.defaultColumns ?? '' }}\">
        {%- set row_class = row_class|default(row_attr.class|default('mb-3')) -%}
        <div {% with {attr: row_attr|merge({class: (row_class ~ ((not compound or force_error|default(false)) and not valid ? ' has-error'))|trim})} %}{{ block('attributes') }}{% endwith %}>
            {{- form_label(form) -}}
            <div class=\"form-widget\">
                {% set has_prepend_html = field.prepend_html|default(null) is not null %}
                {% set has_append_html = field.append_html|default(null) is not null %}
                {% set has_input_groups = has_prepend_html or has_append_html %}

                {% if has_input_groups %}<div class=\"input-group\">{% endif %}
                    {% if has_prepend_html %}
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">{{ field.prepend_html|raw }}</span>
                        </div>
                    {% endif %}

                    {{ form_widget(form) }}

                    {% if has_append_html %}
                        <span class=\"input-group-text\">{{ field.append_html|raw }}</span>
                    {% endif %}
                {% if has_input_groups %}</div>{% endif %}

                {% if field.help ?? false %}
                    <small class=\"form-text form-help\">{{ field.help|trans(label_translation_parameters, translation_domain)|raw }}</small>
                {% elseif form.vars.help ?? false %}
                    <small class=\"form-text form-help\">{{ form.vars.help|trans(form.vars.help_translation_parameters, form.vars.translation_domain)|raw }}</small>
                {% endif %}

                {{- form_errors(form) -}}
            </div>
        </div>
    </div>

    {# if a field doesn't define its columns explicitly, insert a fill element to make the field take the entire row space #}
    {% if field.columns|default(null) is null %}
        <div class=\"flex-fill\"></div>
    {% endif %}
{% endblock form_row %}

{% block choice_widget_collapsed %}
    {% if 'ea-autocomplete' == attr['data-ea-widget']|default(false) %}
        {% set attr = attr|merge({
            'data-ea-i18n-no-results-found': 'autocomplete.no-results-found'|trans({}, 'EasyAdminBundle'),
            'data-ea-i18n-no-more-results': 'autocomplete.no-more-results'|trans({}, 'EasyAdminBundle'),
            'data-ea-i18n-loading-more-results': 'autocomplete.loading-more-results'|trans({}, 'EasyAdminBundle'),
        }) %}
    {% endif %}

    {{ parent() }}
{% endblock choice_widget_collapsed %}

{% block collection_row %}
    {% if prototype is defined and not prototype.rendered %}
        {% set row_attr = row_attr|merge({'data-prototype': form_row(prototype)}) %}
    {% endif %}

    {% set maxKey = 0 %}
    {% for key in form.children|keys %}
        {% if key matches '/^\\\\d+\$/' %}
            {% set intKey = key|number_format(0, '', '', '') %}
            {% if intKey > maxKey %}
                {% set maxKey = intKey %}
            {% endif %}
        {% endif %}
    {% endfor %}

    {% set row_attr = row_attr|merge({
        'data-ea-collection-field': 'true',
        'data-entry-is-complex': form.vars.ea_vars.field and form.vars.ea_vars.field.customOptions.get('entryIsComplex') ? 'true' : 'false',
        'data-allow-add': allow_add ? 'true' : 'false',
        'data-allow-delete': allow_delete ? 'true' : 'false',
        'data-num-items': form.children is empty ? 0 : maxKey + 1,
        'data-form-type-name-placeholder': prototype is defined ? prototype.vars.name : '',
    }) %}

    {{ block('form_row') }}
{% endblock collection_row %}

{% block collection_widget %}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
               returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% set isEmptyCollection = value is null or (value is iterable and value is empty) %}
    {% set is_array_field = 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\ArrayField' == form.vars.ea_vars.field.fieldFqcn|default(false) %}

    <div class=\"ea-form-collection-items\">
        {% if isEmptyCollection %}
            {{ block('empty_collection') }}
        {% elseif is_array_field %}
            {{ block('form_widget') }}
        {% else %}
            <div class=\"accordion\">
                {{ block('form_widget') }}
            </div>
        {% endif %}
    </div>

    {% if isEmptyCollection or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection')}) %}
    {% endif %}

    {% if allow_add|default(false) and not disabled %}
        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            {{ component('ea:Icon', { name: 'internal:plus', class: 'pr-1' }) }}
            {{ 'action.add_new_item'|trans({}, 'EasyAdminBundle') }}
        </button>
    {% endif %}
{% endblock collection_widget %}

{% block collection_entry_row %}
    {% set is_array_field = 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\ArrayField' == form_parent(form).vars.ea_vars.field.fieldFqcn|default(false) %}
    {% set is_complex = form_parent(form).vars.ea_vars.field.customOptions.get('entryIsComplex') ?? false %}
    {% set to_string_method = form_parent(form).vars.ea_vars.field.customOptions.get('entryToStringMethod') ?? null %}
    {% set allows_deleting_items = form_parent(form).vars.allow_delete|default(false) %}
    {% set render_expanded = not form.vars.valid or form_parent(form).vars.ea_vars.field.customOptions.get('renderExpanded')|default(false) %}
    {% set delete_item_button %}
        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"{{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}\">
            {{ component('ea:Icon', { name: 'internal:delete' }) }}
        </button>
    {% endset %}

    <div class=\"field-collection-item {{ is_complex ? 'field-collection-item-complex' }} {{ not form.vars.valid ? 'is-invalid' }}\">
        {% if is_array_field|default(false) %}
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {% if allows_deleting_items and not disabled %}
                {{ delete_item_button }}
            {% endif %}
        {% else %}
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button {{ render_expanded ? '' : 'collapsed' }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ id }}-contents\">
                        {{ component('ea:Icon', { name: 'internal:chevron-right', class: 'form-collection-item-collapse-marker' }) }}
                        {{ value|ea_as_string(to_string_method) }}
                    </button>

                    {% if allows_deleting_items and not disabled %}
                        {{ delete_item_button }}
                    {% endif %}
                </h2>
                <div id=\"{{ id }}-contents\" class=\"accordion-collapse collapse {{ render_expanded ? 'show' }}\">
                    <div class=\"accordion-body\">
                        <div class=\"row\">
                            {{ form_widget(form) }}
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock collection_entry_row %}

{% block form_widget_compound %}
    <div class=\"form-widget-compound\">
        {% if 'collection' in block_prefixes %}
            {# the \"is iterable\" check is needed because if an object implements __toString() and
               returns an empty string, \"is empty\" returns true even if it's not a collection #}
            {% set isEmptyCollection = value is null or (value is iterable and value is empty) %}
            {% if isEmptyCollection %}
                {{ block('empty_collection') }}
            {% endif %}
            {% if isEmptyCollection or form.vars.prototype is defined %}
                {% set attr = attr|merge({'data-empty-collection': block('empty_collection')}) %}
            {% endif %}
        {% endif %}

        {{ parent() }}
    </div>
{% endblock form_widget_compound %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ ea().field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{# Labels #}

{% block form_label -%}
    {% if label is same as(false) -%}
        {# don't display anything, not even an empty <label> element; if you want to not display
           any label contents but keep the form layout, use an empty string as the field label #}
    {%- else -%}
        {%- if compound is defined and compound -%}
            {%- set element = 'legend' -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- else -%}
            {%- set label_attr = label_attr|merge({for: id, class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is same as('') -%}
            {# don't process the label; this is used to not display any label content
               but render an empty <label> element keep the form layout #}
        {%- elseif label is null -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with {attr: label_attr} %}{{ block('attributes') }}{% endwith %}{% endif %}>
        {%- if translation_domain is same as(false) -%}
            {%- if label_html|default(false) is same as(false) -%}
                {{- label -}}
            {%- else -%}
                {{- label|raw -}}
            {%- endif -%}
        {%- else -%}
            {%- if label_html|default(false) is same as(false) -%}
                {{- label|trans(label_translation_parameters, translation_domain) -}}
            {%- else -%}
                {{- label|trans(label_translation_parameters, translation_domain)|raw -}}
            {%- endif -%}
        {%- endif -%}
        </{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label %}

{# Errors #}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(ea().templatePath('label/empty')) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
    <div class=\"ea-vich-file\">
        {% if download_uri|default('') is not empty %}
            <a class=\"ea-vich-file-name\" href=\"{{ asset_helper is same as(true) ? asset(download_uri) : download_uri }}\">
                {{ component('ea:Icon', { name: 'internal:file-lines' }) }}
                {%- if download_label|default(false) -%}
                    {{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}
                {%- else -%}
                    {{ download_uri|split('/')|last ?: 'download'|trans({}, translation_domain) }}
                {%- endif -%}
            </a>
        {% endif %}

        {% set file_upload_js %}
            var newFile = document.getElementById('{{ form.file.vars.id }}').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('{{ form.file.vars.id }}_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        {% endset %}

        <div class=\"ea-vich-file-actions\">
            {# the container element is needed to allow customizing the <input type=\"file\" /> #}
            <div class=\"btn btn-secondary input-file-container\">
                {{ component('ea:Icon', { name: 'internal:upload' }) }} {{ 'action.choose_file'|trans({}, 'EasyAdminBundle') }}
                {{ form_widget(form.file, {attr: {onchange: file_upload_js}, vich: true}) }}
            </div>

            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}
        </div>
        <div class=\"small\" id=\"{{ form.file.vars.id }}_new_file_name\"></div>
    </div>
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
    {% set formTypeOptions = ea_vars.field.formTypeOptions|default('') %}
    <div class=\"ea-vich-image\">
        {% if image_uri|default('') is not empty %}
            {% if download_uri|default('') is empty %}
                <div class=\"ea-lightbox-thumbnail\">
                    <img style=\"cursor: initial\" src=\"{{ asset_helper is same as(true) ? asset(image_uri) : image_uri }}\">
                </div>
            {% else %}
                {% set _lightbox_id = 'ea-lightbox-' ~ id %}

                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#{{ _lightbox_id }}\">
                    <img src=\"{{ asset_helper is same as(true) ? asset(image_uri) : image_uri }}\">
                </a>

                <div id=\"{{ _lightbox_id }}\" class=\"ea-lightbox\">
                    <img src=\"{{ asset_helper is same as(true) ? asset(download_uri) : download_uri }}\">
                </div>
            {% endif %}
        {% endif %}

        {% set file_upload_js %}
            var newFile = document.getElementById('{{ form.file.vars.id }}').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('{{ form.file.vars.id }}_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        {% endset %}

        <div class=\"ea-vich-image-actions\">
            {# the container element is needed to allow customizing the <input type=\"file\" /> #}
            <div class=\"btn btn-secondary input-file-container\">
                {{ component('ea:Icon', { name: 'internal:upload' }) }} {{ 'action.choose_file'|trans({}, 'EasyAdminBundle') }}
                {{ form_widget(form.file, {attr: {onchange: file_upload_js}, vich: true}) }}
            </div>

            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}
        </div>
        <div class=\"small\" id=\"{{ form.file.vars.id }}_new_file_name\"></div>
    </div>
{% endblock %}

{% block ea_crud_rest %}
    {{ form_rest(form) }}
{% endblock ea_crud_rest %}

{# EasyAdmin form type #}
{% block ea_crud_widget %}
    {% for field in form %}
        {{ form_row(field) }}
    {% endfor %}
{% endblock ea_crud_widget %}

{# TODO: remove this when \"form panels\" are removed #}
{% block ea_crud_widget_panels %}
    {% deprecated 'The \"ea_crud_widget_panels\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details.' %}

    {{ block('ea_crud_widget_fieldsets') }}
{% endblock ea_crud_widget_panels %}

{% block ea_crud_widget_fieldsets %}
    {% deprecated 'The \"ea_crud_widget_fieldsets\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details.' %}

    {% for fieldset_name, fieldset_config in field.vars.ea_crud_form.form_fieldsets|filter(fieldset_config => not fieldset_config.form_tab or fieldset_config.form_tab == tab_name) %}
        {% set fieldset_has_header = fieldset_config.label|default(false) or fieldset_config.icon|default(false) or fieldset_config.help|default(false) %}

        {% set collapsible = fieldset_config.collapsible %}
        {% set collapsed = fieldset_config.collapsed %}

        <div class=\"{{ fieldset_config.css_class ?? '' }}\">
            <fieldset class=\"form-fieldset\">
                {% if fieldset_has_header %}
                    <div class=\"form-fieldset-header {{ collapsible ? 'collapsible' }} {{ fieldset_config.help|default(false) is not empty ? 'with-help' }}\">
                        <div class=\"form-fieldset-title\">
                            <a {% if not collapsible %}
                                href=\"#\" class=\"not-collapsible\"
                            {% else %}
                                href=\"#content-{{ fieldset_name }}\" data-bs-toggle=\"collapse\"
                                class=\"form-fieldset-collapse {{ collapsed ? 'collapsed' }}\"
                                aria-expanded=\"{{ collapsed ? 'false' : 'true' }}\" aria-controls=\"content-{{ fieldset_name }}\"
                            {% endif %}
                            >
                                {% if collapsible %}
                                    {{ component('ea:Icon', { name: 'internal:chevron-right', class: 'form-fieldset-collapse-marker' }) }}
                                {% endif %}

                                {% if fieldset_config.icon|default(false) %}
                                    {{ component('ea:Icon', { name: (fieldset_config.icon), class: 'form-fieldset-icon' }) }}
                                {% endif %}
                                {{ fieldset_config.label|trans|raw }}
                            </a>

                            {% if fieldset_config.help|default(false) %}
                                <div class=\"form-fieldset-help\">{{ fieldset_config.help|trans|raw }}</div>
                            {% endif %}
                        </div>
                    </div>
                {% endif %}

                <div id=\"content-{{ fieldset_name }}\" class=\"form-fieldset-body {{ not fieldset_has_header ? 'without-header' }} {{ collapsible ? 'collapse' }} {{ not collapsed ? 'show' }}\">
                    <div class=\"row\">
                        {% for field in form|filter(field => 'hidden' not in field.vars.block_prefixes and field.vars.ea_crud_form.form_fieldset == fieldset_name) %}
                            {% if not field.vars.ea_crud_form.form_tab or field.vars.ea_crud_form.form_tab == tab_name %}
                                {{ form_row(field) }}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </fieldset>
        </div>
    {% else %}
        {% macro recursiveFieldsetForm(form) %}
            {% for field in form|filter(field => 'hidden' not in field.vars.block_prefixes and ((field.vars.ea_crud_form.form_tab is defined and not field.vars.ea_crud_form.form_tab) or field.vars.ea_crud_form.form_tabs is defined)) %}
                {% if field.vars.ea_crud_form.form_tabs is defined %}
                    {# If the field is a nested CRUD form then only render its children #}
                    {{ _self.recursiveFieldsetForm(field) }}
                {% else %}
                    {# Render all other fields #}
                    {{ form_row(field) }}
                {% endif %}
            {% endfor %}
        {% endmacro %}
        {{ _self.recursiveFieldsetForm(form) }}
    {% endfor %}
{% endblock ea_crud_widget_fieldsets %}

{# EasyAdminAutocomplete form type #}
{% block ea_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {attr: attr|merge({required: required})}) }}
{% endblock ea_autocomplete_widget %}

{% block ea_autocomplete_inner_label %}
    {% set name = form_parent(form).vars.name %}
    {{ block('form_label') }}
{% endblock ea_autocomplete_inner_label %}

{# EasyAdmin's CodeEditor form type #}
{% block ea_code_editor_widget %}
    {{ form_widget(form, {attr: attr|merge({
        'data-ea-code-editor-field': 'true',
        'data-language': form.vars.ea_vars.field.customOptions.get('language'),
        'data-tab-size': form.vars.ea_vars.field.customOptions.get('tabSize'),
        'data-indent-with-tabs': form.vars.ea_vars.field.customOptions.get('indentWithTabs') ? 'true' : 'false',
        'data-show-line-numbers': form.vars.ea_vars.field.customOptions.get('showLineNumbers') ? 'true' : 'false',
        'data-number-of-rows': form.vars.ea_vars.field.customOptions.get('numOfRows'),
    })}) }}
{% endblock ea_code_editor_widget %}

{# EasyAdmin's TextEditor form type #}
{% block ea_text_editor_widget %}
    {{ form_widget(form, {attr: attr|merge({
        class: 'ea-text-editor-content d-none',
        'data-number-of-rows': form.vars.ea_vars.field.customOptions.get('numOfRows')|default(5),
        'data-trix-editor-config': form.vars.ea_vars.field.customOptions.get('trixEditorConfig')|default(null)|json_encode,
    })}) }}

    <div class=\"ea-text-editor-wrapper {{ row_attr.class|default('') ~ (not valid ? ' has-error') }}\">
        <trix-editor input=\"{{ id }}\" class=\"trix-content\"></trix-editor>
    </div>
{% endblock ea_text_editor_widget %}

{# EasyAdminSection form type #}
{% block ea_form_row_row %}
    <div class=\"{{ form.vars.row_attr.class }}\"></div>
{% endblock %}

{% block ea_form_column_group_open_row %}
    {# if columns are inside tabs, don't add a '.row' element because the tab pane already opens it #}
    {% if not form.vars.ea_is_inside_tab|default(false) %}
        <div class=\"row\">
    {% endif %}
{% endblock ea_form_column_group_open_row %}

{% block ea_form_column_group_close_row %}
    {# if columns are inside tabs, we don't add a '.row' element because
       the tab pane already opens it; so, don't close it here #}
    {% if not form.vars.ea_is_inside_tab|default(false) %}
        </div>
    {% endif %}
{% endblock ea_form_column_group_close_row %}

{% block ea_form_column_open_row %}
    {% set field = form.vars.ea_vars.field %}
    {% set field_icon = field.getCustomOption('icon') %}
    {# don't use \"field.label|default()\" here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
    {% set has_label = field.label is not same as(false) and field.label is not null and field.label is not same as('') %}
    {% set has_help = field.help is not same as(false) and field.help is not null and field.help is not same as('') %}
    {% set column_has_title = field_icon != null or has_label or has_help %}

    <div class=\"form-column {{ not column_has_title ? 'form-column-no-header' }} {{ field.cssClass }}\">
        {% if column_has_title %}
            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    {% if field_icon %}{{ component('ea:Icon', { name: (field_icon), class: 'form-column-icon' }) }}{% endif %}
                    {% if has_label %}{{ field.label|trans(domain: ea().i18n.translationDomain)|raw }}{% endif %}
                </div>

                {% if has_help %}
                    <div class=\"form-column-help\">{{ field.help|trans(domain: ea().i18n.translationDomain)|raw }}</div>
                {% endif %}
            </div>
        {% endif %}
{% endblock ea_form_column_open_row %}

{% block ea_form_column_close_row %}
    </div>
{% endblock ea_form_column_close_row %}

{% block ea_form_fieldset_open_ealabel %}
    {% if ea_is_collapsible %}
        {{ component('ea:Icon', { name: 'internal:chevron-right', class: 'form-fieldset-collapse-marker' }) }}
    {% endif %}

    {% if ea_icon %}
        {{ component('ea:Icon', { name: (ea_icon), class: 'form-fieldset-icon' }) }}
    {% endif %}

    {{ form.vars.label|trans|raw }}
{% endblock ea_form_fieldset_open_ealabel %}

{% block ea_form_fieldset_open_label %}
    {# don't use 'ea_help is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
    {% set has_help = ea_help is not same as(false) and ea_help is not null and ea_help is not same as('') %}
    {% set collapsed_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_COLLAPSED') %}
    {% set fieldset_error_count_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_FIELDSET_ERROR_COUNT') %}
    {% set fieldset_error_count = form.vars.ea_vars.field.getCustomOption(fieldset_error_count_option_name)|default(0) %}
    {% set is_collapsed = form.vars.ea_vars.field.getCustomOption(collapsed_option_name)|default(false) %}

    <div class=\"form-fieldset-header {{ ea_is_collapsible ? 'collapsible' }} {{ has_help ? 'with-help' }}\">
        <div class=\"form-fieldset-title\">
            {% if ea_is_collapsible %}
                <a href=\"#content-{{ form.vars.name }}\" data-bs-toggle=\"collapse\"
                   class=\"form-fieldset-title-content form-fieldset-collapse {{ is_collapsed ? 'collapsed' }}\"
                   aria-expanded=\"{{ is_collapsed ? 'false' : 'true' }}\" aria-controls=\"content-{{ form.vars.name }}\">
                    {{ ea_form_ealabel(form) }}
                    {%- if fieldset_error_count > 0 -%}
                        <span class=\"badge badge-danger\" title=\"{{ 'form.tab.error_badge_title'|trans({'%count%': fieldset_error_count}, 'EasyAdminBundle') }}\">
                            {{- fieldset_error_count -}}
                        </span>
                    {%- endif -%}
                </a>
            {% else %}
                <span class=\"not-collapsible form-fieldset-title-content\">
                    {{ ea_form_ealabel(form) }}
                    {%- if fieldset_error_count > 0 -%}
                        <span class=\"badge badge-danger\" title=\"{{ 'form.tab.error_badge_title'|trans({'%count%': fieldset_error_count}, 'EasyAdminBundle') }}\">
                            {{- fieldset_error_count -}}
                        </span>
                    {%- endif -%}
                </span>
            {% endif %}

            {% if has_help %}
                <div class=\"form-fieldset-help\">{{ ea_help|trans|raw }}</div>
            {% endif %}
        </div>
    </div>
{% endblock ea_form_fieldset_open_label %}

{% block ea_form_fieldset_open_row %}
    {# don't use 'ea_help is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
    {% set has_help = ea_help is not same as(false) and ea_help is not null and ea_help is not same as('') %}
    {# don't use 'form.vars.label is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
    {% set has_label = form.vars.label is not same as(false) and form.vars.label is not null and form.vars.label is not same as('') %}
    {% set fieldset_has_header = has_label or ea_icon or has_help %}
    {% set collapsed_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_COLLAPSED') %}
    {% set fieldset_error_count_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_FIELDSET_ERROR_COUNT') %}
    {% set fieldset_has_errors = form.vars.ea_vars.field.getCustomOption(fieldset_error_count_option_name)|default(0) > 0 %}
    {% set is_collapsed = form.vars.ea_vars.field.getCustomOption(collapsed_option_name)|default(false) %}

    <div class=\"form-fieldset {{ not fieldset_has_header ? 'form-fieldset-no-header' }} {{ fieldset_has_errors ? 'has-fieldset-error' }} {{ ea_css_class }}\">
        <fieldset>
            {% if fieldset_has_header %}
                {{ form_label(form) }}
            {% endif %}

            <div id=\"content-{{ form.vars.name }}\" class=\"form-fieldset-body {{ not fieldset_has_header ? 'without-header' }} {{ ea_is_collapsible ? 'collapse' }} {{ not is_collapsed ? 'show' }}\">
                <div class=\"row\">
{% endblock ea_form_fieldset_open_row %}

{% block ea_form_fieldset_close_row %}
                </div>
            </div>
        </fieldset>
    </div>
{% endblock ea_form_fieldset_close_row %}

{% block ea_form_tablist_row %}
    {% set tab_id_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_ID') %}
    {% set tab_is_active_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_IS_ACTIVE') %}
    {% set tab_error_count_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_ERROR_COUNT') %}
    {% set field = form.vars.ea_vars.field %}

    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            {% for tab in field.getCustomOption('tabs') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if tab.getCustomOption(tab_is_active_option_name) %}active{% endif %}\" href=\"#{{ tab.getCustomOption(tab_id_option_name) }}\" id=\"tablist-{{ tab.getCustomOption(tab_id_option_name) }}\" data-bs-toggle=\"tab\">
                        {%- if tab.getCustomOption('icon')|default(false) -%}
                            {{ component('ea:Icon', { name: (tab.getCustomOption('icon')), class: 'tab-nav-item-icon' }) }}
                        {%- endif -%}
                        {{ tab.label|trans(domain: ea().i18n.translationDomain)|raw }}

                        {% set tab_error_count = tab.getCustomOption(tab_error_count_option_name) %}
                        {%- if tab_error_count > 0 -%}
                            <span class=\"badge badge-danger\" title=\"{{ 'form.tab.error_badge_title'|trans({'%count%': tab_error_count}, 'EasyAdminBundle') }}\">
                                {{- tab_error_count -}}
                            </span>
                        {%- endif -%}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </div>
{% endblock ea_form_tablist_row %}

{% block ea_form_tabpane_group_open_row %}
    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
{% endblock ea_form_tabpane_group_open_row %}

{% block ea_form_tabpane_group_close_row %}
        </div>
    </div>
{% endblock ea_form_tabpane_group_close_row %}

{% block ea_form_tabpane_open_row %}
    {% set tab_is_active_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_IS_ACTIVE') %}
    {% set field = form.vars.ea_vars.field %}

    <div id=\"{{ ea_tab_id }}\" class=\"tab-pane {% if field.getCustomOption(tab_is_active_option_name) %}active{% endif %} {{ ea_css_class }}\" {% for key, value in form.vars.attr %}{{ key }}=\"{{ value|e('html') }}\"{% endfor %}>
        {% if ea_help %}
            <div class=\"content-header-help tab-help\">
                {{ ea_help|trans(domain: ea().i18n.translationDomain)|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
{% endblock ea_form_tabpane_open_row %}

{% block ea_form_tabpane_close_row %}
        </div>
    </div>
{% endblock ea_form_tabpane_close_row %}

{# EasyAdminFilters form type #}
{% block ea_filters_widget %}
    {% set applied_filters = ea().request.query.all()['filters']|default([])|keys %}

    {% for field in form %}
        <div class=\"col-12\">
            <div class=\"filter-field px-3\" data-filter-property=\"{{ field.vars.name }}\">
                <div class=\"filter-heading\" id=\"filter-heading-{{ loop.index }}\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" {% if field.vars.name in applied_filters %}checked{% endif %}>
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-{{ loop.index }}\" aria-expanded=\"{{ field.vars.name in applied_filters ? 'true' : 'false' }}\" aria-controls=\"filter-content-{{ loop.index }}\"
                        {% for name, value in field.vars.label_attr|default([]) %}{{ name }}=\"{{ value|e('html') }}\" {% endfor %}>
                        {# don't use 'field.vars.label is not empty' here; it'll trigger deprecation messages: Method TranslatableMessage::__toString() is deprecated #}
                        {% set has_filter_label = field.vars.label is not same as(false) and field.vars.label is not null and field.vars.label is not same as('') %}
                        {% set filter_label = has_filter_label ? field.vars.label : field.vars.name|humanize %}
                        {{ filter_label|trans(domain: ea().i18n.translationDomain) }}
                    </a>
                </div>
                <div id=\"filter-content-{{ loop.index }}\" class=\"filter-content collapse {% if field.vars.name in applied_filters %}show{% endif %}\" aria-labelledby=\"filter-heading-{{ loop.index }}\">
                    <div class=\"form-widget\">
                        {{ form_widget(field) }}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock ea_filters_widget %}

{% block comparison_widget %}
    {{ form_widget(form, {attr: form.vars.attr|merge({'data-ea-comparison-id': form.vars.id})}) }}
{% endblock comparison_widget %}

{% block ea_numeric_filter_widget %}
    <div class=\"form-widget-compound\">
        {{ form_row(form.comparison) }}
        {{ form_row(form.value) }}
        <div data-ea-value2-of-comparison-id=\"{{ form.comparison.vars.id }}\" class=\"{{ form.comparison.vars.value != 'between' ? 'd-none' }}\">
            {{ form_row(form.value2) }}
        </div>
    </div>
    {{- form_errors(form) -}}
{% endblock ea_numeric_filter_widget %}

{% block ea_datetime_filter_widget %}
    {{ block('ea_numeric_filter_widget') }}
{% endblock ea_datetime_filter_widget %}

{% block ea_fileupload_widget %}
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            {% set placeholder = t('action.choose_file', {}, 'EasyAdminBundle') %}
            {% set title = '' %}
            {% set filesLabel = 'files'|trans({}, 'EasyAdminBundle') %}
            {% if currentFiles %}
                {% if multiple %}
                    {% set placeholder = currentFiles|length ~ ' ' ~ filesLabel %}
                {% else %}
                    {% set placeholder = (currentFiles|first).filename %}
                    {% set title = (currentFiles|first).mTime|date %}
                {% endif %}
            {% endif %}
            <div class=\"custom-file\">
                {{ form_widget(form.file, {attr: form.file.vars.attr|merge({placeholder: placeholder, title: title, 'data-files-label': filesLabel, class: 'd-none'})}) }}
                {# don't pass 'placeholder' as the 2nd argument of form_label(); Twig calls testEmpty() on it internally, which triggers the TranslatableMessage::__toString() deprecation #}
                {{ form_label(form.file, null, {label: placeholder, label_attr: {class: 'custom-file-label'}}) }}
            </div>
            <div class=\"input-group-text\">
                {%- if currentFiles -%}
                    {% if multiple %}
                        {{ (currentFiles|reduce((carry, file) => carry + file.size))|ea_filesize }}
                    {% else %}
                        {{ (currentFiles|first).size|ea_filesize }}
                    {% endif %}
                {%- endif -%}
                {% if allow_delete %}
                    <label class=\"btn ea-fileupload-delete-btn {{ currentFiles is empty ? 'd-none' }}\" for=\"{{ form.delete.vars.id }}\">
                        {{ component('ea:Icon', { name: 'internal:delete' }) }}
                    </label>
                {% endif %}
                <label class=\"btn\" for=\"{{ form.file.vars.id }}\">
                    {{ component('ea:Icon', { name: 'internal:folder-open' }) }}
                </label>
            </div>
        </div>
        {% if multiple and currentFiles %}
            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    {% for file in currentFiles %}
                        <tr>
                            <td>
                                {% if download_path %}<a href=\"{{ asset(download_path ~ file.filename) }}\">{% endif %}
                                    <span title=\"{{ file.mTime|date }}\">
                                        {{ component('ea:Icon', { name: 'internal:file-lines' }) }} {{ file.filename }}
                                    </span>
                                {% if download_path %}</a>{% endif %}
                            </td>
                            <td class=\"text-right file-size\">{{ file.size|ea_filesize }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
        {% if allow_delete %}
            <div class=\"d-none\">{{ form_widget(form.delete, {label: false}) }}</div>
        {% endif %}
    </div>
    {{ form_errors(form.file) }}
{% endblock %}

{% block TODO_ea_fileupload_widget %}
    {% set placeholder = '' %}
    {% set title = '' %}
    {% set filesLabel = 'files'|trans({}, 'EasyAdminBundle') %}
    {% if currentFiles %}
        {% if multiple %}
            {% set placeholder = currentFiles|length ~ ' ' ~ filesLabel %}
        {% else %}
            {% set placeholder = (currentFiles|first).filename %}
            {% set title = (currentFiles|first).mTime|date %}
        {% endif %}
    {% endif %}

    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            {{ form_widget(form.file, {attr: form.file.vars.attr|merge({placeholder: placeholder, title: title, 'data-files-label': filesLabel, class: 'form-control'})}) }}

            {% if currentFiles %}
                <span class=\"input-group-text\">
                    {% if multiple %}
                        {{ (currentFiles|reduce((carry, file) => carry + file.size))|ea_filesize }}
                    {% else %}
                        {{ (currentFiles|first).size|ea_filesize }}
                    {% endif %}
                </span>
            {% endif %}

            {% if currentFiles and allow_delete %}
                <button class=\"btn ea-fileupload-delete-btn\">
                    {{ component('ea:Icon', { name: 'internal:delete' }) }}
                </button>
            {% endif %}

            {% if currentFiles %}
                <button class=\"btn\">
                    {{ component('ea:Icon', { name: 'internal:folder-open' }) }}
                </button>
            {% endif %}
        </div>

        {% if multiple and currentFiles %}
            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    {% for file in currentFiles %}
                        <tr>
                            <td>
                                {% if download_path %}<a href=\"{{ asset(download_path ~ file.filename) }}\">{% endif %}
                                    <span title=\"{{ file.mTime|date }}\">
                                        {{ component('ea:Icon', { name: 'internal:file-lines' }) }} {{ file.filename }}
                                    </span>
                                    {% if download_path %}</a>{% endif %}
                            </td>
                            <td class=\"text-right file-size\">{{ file.size|ea_filesize }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
        {% if allow_delete %}
            <div class=\"d-none\">{{ form_widget(form.delete, {label: false}) }}</div>
        {% endif %}
    </div>

    {{ form_errors(form.file) }}
{% endblock %}

{% block ea_slug_widget %}
    {% set attr = attr|merge({
        'data-ea-slug-field': '',
        'data-target': target|split('|')|map(name => form.parent.children[name].vars.id)|json_encode,
    }) %}
    {% if attr['data-confirm-text'] is defined %}
        {% set attr = attr|merge({
            'data-confirm-text': attr['data-confirm-text']|trans,
        }) %}
    {% endif %}

    <div class=\"input-group\">
        {{ block('form_widget') }}
        <button type=\"button\" class=\"btn\"
                data-icon-locked=\"{{ component('ea:Icon', {name: 'internal:lock'})|e('html') }}\"
                data-icon-unlocked=\"{{ component('ea:Icon', {name: 'internal:lock-open-solid'})|e('html') }}\">
            {{ component('ea:Icon', { name: 'internal:lock' }) }}
        </button>
    </div>
{% endblock %}
", "@EasyAdmin/crud/form_theme.html.twig", "/home/student/projobj/app/vendor/easycorp/easyadmin-bundle/templates/crud/form_theme.html.twig");
    }
}
