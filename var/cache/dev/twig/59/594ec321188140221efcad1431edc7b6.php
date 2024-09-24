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

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_678118f96cecf4b8882778e3cb300308 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        $context["channel_is_defined"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 1, $this->source); })())), "channel", [], "any", true, true, false, 1);
        // line 2
        yield "<table class=\"logs\" data-filter-level=\"Emergency,Alert,Critical,Error,Warning,Notice,Info,Debug\" data-filters>
    <thead>
        <tr>
            <th data-filter=\"level\">Level</th>
            ";
        // line 6
        if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new RuntimeError('Variable "channel_is_defined" does not exist.', 6, $this->source); })())) {
            yield "<th data-filter=\"channel\">Channel</th>";
        }
        // line 7
        yield "            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 13
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priority", [], "any", false, false, false, 13) >= 400)) {
                // line 14
                yield "            ";
                $context["status"] = "error";
                // line 15
                yield "        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priority", [], "any", false, false, false, 15) >= 300)) {
                // line 16
                yield "            ";
                $context["status"] = "warning";
                // line 17
                yield "        ";
            } else {
                // line 18
                yield "            ";
                $context["severity"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", false, true, false, 18), "exception", [], "any", false, true, false, 18), "severity", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", false, true, false, 18), "exception", [], "any", false, true, false, 18), "severity", [], "any", false, false, false, 18), false)) : (false));
                // line 19
                yield "            ";
                $context["status"] = (((((isset($context["severity"]) || array_key_exists("severity", $context) ? $context["severity"] : (function () { throw new RuntimeError('Variable "severity" does not exist.', 19, $this->source); })()) === constant("E_DEPRECATED")) || ((isset($context["severity"]) || array_key_exists("severity", $context) ? $context["severity"] : (function () { throw new RuntimeError('Variable "severity" does not exist.', 19, $this->source); })()) === constant("E_USER_DEPRECATED")))) ? ("warning") : ("normal"));
                // line 20
                yield "        ";
            }
            // line 21
            yield "        <tr class=\"status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "\" data-filter-level=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 21)), "html", null, true);
            yield "\"";
            if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new RuntimeError('Variable "channel_is_defined" does not exist.', 21, $this->source); })())) {
                yield " data-filter-channel=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 21), "html", null, true);
                yield "\"";
            }
            yield ">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 23), "html", null, true);
            yield "</span>
                <span class=\"text-muted newline\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 24), "H:i:s"), "html", null, true);
            yield "</span>
            </td>
            ";
            // line 26
            if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new RuntimeError('Variable "channel_is_defined" does not exist.', 26, $this->source); })())) {
                // line 27
                yield "                <td class=\"text-small text-bold nowrap\">
                    ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 28), "html", null, true);
                yield "
                </td>
            ";
            }
            // line 31
            yield "            <td>
                ";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatLogMessage(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 32), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", false, false, false, 32));
            yield "
                ";
            // line 33
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", false, false, false, 33)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", false, false, false, 33)) : (false))) {
                // line 34
                yield "                    <pre class=\"text-muted prewrap m-t-5\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", false, false, false, 34), ((Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT") | Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_UNICODE")) | Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_SLASHES"))), "html", null, true);
                yield "</pre>
                ";
            }
            // line 36
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "    </tbody>
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
        return "@Twig/Exception/logs.html.twig";
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
        return array (  152 => 39,  144 => 36,  138 => 34,  136 => 33,  132 => 32,  129 => 31,  123 => 28,  120 => 27,  118 => 26,  113 => 24,  109 => 23,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  67 => 12,  60 => 7,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set channel_is_defined = (logs|first).channel is defined %}
<table class=\"logs\" data-filter-level=\"Emergency,Alert,Critical,Error,Warning,Notice,Info,Debug\" data-filters>
    <thead>
        <tr>
            <th data-filter=\"level\">Level</th>
            {% if channel_is_defined %}<th data-filter=\"channel\">Channel</th>{% endif %}
            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    {% for log in logs %}
        {% if log.priority >= 400 %}
            {% set status = 'error' %}
        {% elseif log.priority >= 300 %}
            {% set status = 'warning' %}
        {% else %}
            {% set severity = log.context.exception.severity|default(false) %}
            {% set status = severity is constant('E_DEPRECATED') or severity is constant('E_USER_DEPRECATED') ? 'warning' : 'normal' %}
        {% endif %}
        <tr class=\"status-{{ status }}\" data-filter-level=\"{{ log.priorityName|lower }}\"{% if channel_is_defined %} data-filter-channel=\"{{ log.channel }}\"{% endif %}>
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
            </td>
            {% if channel_is_defined %}
                <td class=\"text-small text-bold nowrap\">
                    {{ log.channel }}
                </td>
            {% endif %}
            <td>
                {{ log.message|format_log_message(log.context) }}
                {% if log.context ?? false %}
                    <pre class=\"text-muted prewrap m-t-5\">{{ log.context|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_UNESCAPED_UNICODE') b-or constant('JSON_UNESCAPED_SLASHES')) }}</pre>
                {% endif %}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@Twig/Exception/logs.html.twig", "/home/pprior/PhpstormProjects/symfony-contactos3/vendor/symfony/twig-bundle/Resources/views/Exception/logs.html.twig");
    }
}
