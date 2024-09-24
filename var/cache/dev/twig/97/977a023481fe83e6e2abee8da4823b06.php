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

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_92d83e9dc59ed3733c28b8f710168cdc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        // line 1
        yield "<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\" data-toggle-initial=\"";
        yield (((1 == (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 4, $this->source); })()))) ? ("display") : (""));
        yield "\">
                <h3 class=\"trace-class\">
                    ";
        // line 6
        if (((isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new RuntimeError('Variable "num_exceptions" does not exist.', 6, $this->source); })()) > 1)) {
            // line 7
            yield "                        <span class=\"text-muted\">[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new RuntimeError('Variable "num_exceptions" does not exist.', 7, $this->source); })()) - (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 7, $this->source); })())) + 1), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new RuntimeError('Variable "num_exceptions" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "]</span>
                    ";
        }
        // line 9
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 9, $this->source); })()), "class", [], "any", false, false, false, 9), "\\")), "html", null, true);
        yield "
                    <span class=\"icon icon-close\">";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        yield "</span>
                    <span class=\"icon icon-open\">";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        yield "</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\">
        <tr>
            <td>
                ";
        // line 20
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 20, $this->source); })()), "trace", [], "any", false, false, false, 20))) {
            // line 21
            yield "                <pre class=\"stacktrace\">";
            // line 22
            $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 23
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/Exception/traces.txt.twig", ["exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 23, $this->source); })()), "format" => "html"], false);
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($___internal_parse_0_, "html");
            // line 25
            yield "</pre>
                ";
        }
        // line 27
        yield "            </td>
        </tr>
    </tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Twig/Exception/traces_text.html.twig";
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
        return array (  110 => 27,  106 => 25,  104 => 22,  100 => 23,  98 => 22,  96 => 21,  94 => 20,  88 => 17,  79 => 11,  75 => 10,  70 => 9,  62 => 7,  60 => 6,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-{{ index }}\" data-toggle-initial=\"{{ 1 == index ? 'display' }}\">
                <h3 class=\"trace-class\">
                    {% if num_exceptions > 1 %}
                        <span class=\"text-muted\">[{{ num_exceptions - index + 1 }}/{{ num_exceptions }}]</span>
                    {% endif %}
                    {{ exception.class|split('\\\\')|last }}
                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-{{ index }}\">
        <tr>
            <td>
                {% if exception.trace|length %}
                <pre class=\"stacktrace\">
                {%- apply escape('html') -%}
                    {{- include('@Twig/Exception/traces.txt.twig', { exception: exception, format: 'html' }, with_context = false) }}
                {%- endapply -%}
                </pre>
                {% endif %}
            </td>
        </tr>
    </tbody>
</table>
", "@Twig/Exception/traces_text.html.twig", "/home/pprior/PhpstormProjects/symfony-contactos3/vendor/symfony/twig-bundle/Resources/views/Exception/traces_text.html.twig");
    }
}
