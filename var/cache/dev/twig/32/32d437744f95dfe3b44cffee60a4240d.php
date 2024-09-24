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

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_42cf16dbe25595fe59ec0fcb0d44aa6b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        // line 1
        yield "<div class=\"exception-summary ";
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 1, $this->source); })()), "message", [], "any", false, false, false, 1))) ? ("exception-without-message") : (""));
        yield "\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 5, $this->source); })()), "allPrevious", [], "any", false, false, false, 5)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["previousException"]) {
            // line 6
            yield "                    <a href=\"#trace-box-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "revindex", [], "any", false, false, false, 6) + 1), "html", null, true);
            yield "\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["previousException"], "class", [], "any", false, false, false, 6), "html", null, true));
            yield "</a>
                    <span class=\"icon\">";
            // line 7
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/images/chevron-right.svg");
            yield "</span>
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
        unset($context['_seq'], $context['_key'], $context['previousException'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "                <a href=\"#trace-box-1\">";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 9, $this->source); })()), "class", [], "any", false, false, false, 9), "html", null, true));
        yield "</a>
            </h2>
            <h2 class=\"exception-http\">
                HTTP ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 12, $this->source); })()), "html", null, true);
        yield " <small>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message ";
        // line 19
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 19, $this->source); })()), "message", [], "any", false, false, false, 19)) > 180)) ? ("long") : (""));
        yield "\">";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFileFromText(Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 20, $this->source); })()), "message", [], "any", false, false, false, 20), "html", null, true)));
        // line 21
        yield "</h1>

            <div class=\"exception-illustration hidden-xs-down\">
                ";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/images/symfony-ghost.svg");
        yield "
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            ";
        // line 33
        $context["exception_as_array"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 33, $this->source); })()), "toarray", [], "any", false, false, false, 33);
        // line 34
        yield "            ";
        $context["_exceptions_with_user_code"] = [];
        // line 35
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 36
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "trace", [], "any", false, false, false, 36));
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
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 37
                yield "                    ";
                if (((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 37)) && !CoreExtension::inFilter("/vendor/", CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 37))) && !CoreExtension::inFilter("/var/cache/", CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 37))) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 37))) {
                    // line 38
                    yield "                        ";
                    $context["_exceptions_with_user_code"] = Twig\Extension\CoreExtension::merge((isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new RuntimeError('Variable "_exceptions_with_user_code" does not exist.', 38, $this->source); })()), [$context["i"]]);
                    // line 39
                    yield "                    ";
                }
                // line 40
                yield "                ";
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
            unset($context['_seq'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['i'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            <h3 class=\"tab-title\">
                ";
        // line 43
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 43, $this->source); })())) > 1)) {
            // line 44
            yield "                    Exceptions <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 44, $this->source); })())), "html", null, true);
            yield "</span>
                ";
        } else {
            // line 46
            yield "                    Exception
                ";
        }
        // line 48
        yield "            </h3>

            <div class=\"tab-content\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 51, $this->source); })()));
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
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 52
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/Exception/traces.html.twig", ["exception" => $context["e"], "index" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52), "expand" => (CoreExtension::inFilter($context["i"], (isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new RuntimeError('Variable "_exceptions_with_user_code" does not exist.', 52, $this->source); })())) || (Twig\Extension\CoreExtension::testEmpty((isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new RuntimeError('Variable "_exceptions_with_user_code" does not exist.', 52, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 52)))], false);
            yield "
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
        unset($context['_seq'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "            </div>
        </div>

        ";
        // line 57
        if ((isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 57, $this->source); })())) {
            // line 58
            yield "        <div class=\"tab ";
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 58, $this->source); })()), "logs", [], "any", false, false, false, 58))) ? ("disabled") : (""));
            yield "\">
            <h3 class=\"tab-title\">
                Logs
                ";
            // line 61
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", [], "any", false, false, false, 61)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", [], "any", false, false, false, 61)) : (false))) {
                yield "<span class=\"badge status-error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 61, $this->source); })()), "counterrors", [], "any", false, false, false, 61), "html", null, true);
                yield "</span>";
            }
            // line 62
            yield "            </h3>

            <div class=\"tab-content\">
                ";
            // line 65
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 65, $this->source); })()), "logs", [], "any", false, false, false, 65)) {
                // line 66
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/Exception/logs.html.twig", ["logs" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 66, $this->source); })()), "logs", [], "any", false, false, false, 66)], false);
                yield "
                ";
            } else {
                // line 68
                yield "                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                ";
            }
            // line 72
            yield "            </div>
        </div>
        ";
        }
        // line 75
        yield "
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                ";
        // line 78
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 78, $this->source); })())) > 1)) {
            // line 79
            yield "                    Stack Traces <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 79, $this->source); })())), "html", null, true);
            yield "</span>
                ";
        } else {
            // line 81
            yield "                    Stack Trace
                ";
        }
        // line 83
        yield "            </h3>

            <div class=\"tab-content\">
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 86, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 87
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/Exception/traces_text.html.twig", ["exception" => $context["e"], "index" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 87), "num_exceptions" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 87)], false);
            yield "
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
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "            </div>
        </div>

        ";
        // line 92
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new RuntimeError('Variable "currentContent" does not exist.', 92, $this->source); })()))) {
            // line 93
            yield "        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new RuntimeError('Variable "currentContent" does not exist.', 97, $this->source); })()), "html", null, true);
            yield "
            </div>
        </div>
        ";
        }
        // line 101
        yield "    </div>
</div>
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
        return "@Twig/Exception/exception.html.twig";
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
        return array (  368 => 101,  361 => 97,  355 => 93,  353 => 92,  348 => 89,  331 => 87,  314 => 86,  309 => 83,  305 => 81,  299 => 79,  297 => 78,  292 => 75,  287 => 72,  281 => 68,  275 => 66,  273 => 65,  268 => 62,  262 => 61,  255 => 58,  253 => 57,  248 => 54,  231 => 52,  214 => 51,  209 => 48,  205 => 46,  199 => 44,  197 => 43,  194 => 42,  188 => 41,  174 => 40,  171 => 39,  168 => 38,  165 => 37,  147 => 36,  142 => 35,  139 => 34,  137 => 33,  125 => 24,  120 => 21,  118 => 20,  115 => 19,  103 => 12,  96 => 9,  80 => 7,  73 => 6,  56 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"exception-summary {{ exception.message is empty ? 'exception-without-message' }}\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                {% for previousException in exception.allPrevious|reverse %}
                    <a href=\"#trace-box-{{ loop.revindex + 1 }}\">{{ previousException.class|abbr_class }}</a>
                    <span class=\"icon\">{{ include('@Twig/images/chevron-right.svg') }}</span>
                {% endfor %}
                <a href=\"#trace-box-1\">{{ exception.class|abbr_class }}</a>
            </h2>
            <h2 class=\"exception-http\">
                HTTP {{ status_code }} <small>{{ status_text }}</small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message {{ exception.message|length > 180 ? 'long' }}\">
                {{- exception.message|nl2br|format_file_from_text -}}
            </h1>

            <div class=\"exception-illustration hidden-xs-down\">
                {{ include('@Twig/images/symfony-ghost.svg') }}
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            {% set exception_as_array = exception.toarray %}
            {% set _exceptions_with_user_code = [] %}
            {% for i, e in exception_as_array %}
                {% for trace in e.trace %}
                    {% if (trace.file is not empty) and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and not loop.last %}
                        {% set _exceptions_with_user_code = _exceptions_with_user_code|merge([i]) %}
                    {% endif %}
                {% endfor %}
            {% endfor %}
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Exceptions <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Exception
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for i, e in exception_as_array %}
                    {{ include('@Twig/Exception/traces.html.twig', { exception: e, index: loop.index, expand: i in _exceptions_with_user_code or (_exceptions_with_user_code is empty and loop.first) }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if logger %}
        <div class=\"tab {{ logger.logs is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">
                Logs
                {% if logger.counterrors ?? false %}<span class=\"badge status-error\">{{ logger.counterrors }}</span>{% endif %}
            </h3>

            <div class=\"tab-content\">
                {% if logger.logs %}
                    {{ include('@Twig/Exception/logs.html.twig', { logs: logger.logs }, with_context = false)  }}
                {% else %}
                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                {% endif %}
            </div>
        </div>
        {% endif %}

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Stack Traces <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Stack Trace
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for e in exception_as_array %}
                    {{ include('@Twig/Exception/traces_text.html.twig', { exception: e, index: loop.index, num_exceptions: loop.length }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if currentContent is not empty %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                {{ currentContent }}
            </div>
        </div>
        {% endif %}
    </div>
</div>
", "@Twig/Exception/exception.html.twig", "/home/pprior/PhpstormProjects/symfony-contactos3/vendor/symfony/twig-bundle/Resources/views/Exception/exception.html.twig");
    }
}
