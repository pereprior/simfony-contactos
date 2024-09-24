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

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_44f3e6b1953bfcbfee89af16b163c9ca extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 1, $this->source); })()), "function", [], "any", false, false, false, 1)) {
            // line 2
            yield "at ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 2, $this->source); })()), "class", [], "any", false, false, false, 2) . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 2, $this->source); })()), "type", [], "any", false, false, false, 2)) . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 2, $this->source); })()), "function", [], "any", false, false, false, 2));
            yield "(";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatArgsAsText(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 2, $this->source); })()), "args", [], "any", false, false, false, 2));
            yield ")";
        }
        // line 4
        if (( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", false, false, false, 4), "")) : (""))) &&  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "line", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "line", [], "any", false, false, false, 4), "")) : (""))))) {
            // line 5
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), "function", [], "any", false, false, false, 5)) ? ("
     (") : ("at "));
            yield Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFile(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), "file", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), "line", [], "any", false, false, false, 5))), [(" at line " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), "line", [], "any", false, false, false, 5)) => ""]);
            yield ":";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), "line", [], "any", false, false, false, 5);
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), "function", [], "any", false, false, false, 5)) ? (")") : (""));
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Twig/Exception/trace.txt.twig";
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
        return array (  59 => 5,  57 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if trace.function %}
at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{%- endif -%}
{% if trace.file|default('') is not empty and trace.line|default('') is not empty %}
  {{- trace.function ? '\\n     (' : 'at '}}{{ trace.file|format_file(trace.line)|striptags|replace({ (' at line ' ~ trace.line): '' }) }}:{{ trace.line }}{{ trace.function ? ')' }}
{%- endif %}
", "@Twig/Exception/trace.txt.twig", "/home/pprior/PhpstormProjects/symfony-contactos3/vendor/symfony/twig-bundle/Resources/views/Exception/trace.txt.twig");
    }
}
