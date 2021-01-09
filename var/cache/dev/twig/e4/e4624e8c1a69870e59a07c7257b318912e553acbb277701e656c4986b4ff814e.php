<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/animales.html.twig */
class __TwigTemplate_93fb2dede613a52d31c709c509b487c62b4ad4b7c27d48d85126718fc77992b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/animales.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/animales.html.twig"));

        $this->parent = $this->loadTemplate("layouts/master.html.twig", "home/animales.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Animales
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    <h2>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</h2>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        // line 15
        echo "
    ";
        // line 17
        echo "    ";
        $context["perro"] = "Pastor Aleman";
        // line 18
        echo "    <h3>
        ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["perro"]) || array_key_exists("perro", $context) ? $context["perro"] : (function () { throw new RuntimeError('Variable "perro" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "
    </h3>

    ";
        // line 23
        echo "
    ";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 24, $this->source); })()));
        echo "
    ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 25, $this->source); })()), 2, [], "array", false, false, false, 25), "html", null, true);
        echo "

    ";
        // line 28
        echo "
    ";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["ave"]) || array_key_exists("ave", $context) ? $context["ave"] : (function () { throw new RuntimeError('Variable "ave" does not exist.', 29, $this->source); })()));
        echo "
    ";
        // line 30
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["ave"]) || array_key_exists("ave", $context) ? $context["ave"] : (function () { throw new RuntimeError('Variable "ave" does not exist.', 30, $this->source); })()), "tipo", [], "any", false, false, false, 30) . " - ") . twig_get_attribute($this->env, $this->source, (isset($context["ave"]) || array_key_exists("ave", $context) ? $context["ave"] : (function () { throw new RuntimeError('Variable "ave" does not exist.', 30, $this->source); })()), "raza", [], "any", false, false, false, 30)), "html", null, true);
        echo "

    ";
        // line 33
        echo "
    ";
        // line 35
        echo "
    ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ave"]) || array_key_exists("ave", $context) ? $context["ave"] : (function () { throw new RuntimeError('Variable "ave" does not exist.', 36, $this->source); })()), "tipo", [], "any", false, false, false, 36) == "palomo")) {
            // line 37
            echo "        <h2>Ciudado un palomo</h2>
    ";
        } else {
            // line 39
            echo "        <h2>No hay palomos a la vista</h2>
    ";
        }
        // line 41
        echo "
    ";
        // line 43
        echo "
    ";
        // line 44
        if ((twig_length_filter($this->env, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 44, $this->source); })())) > 0)) {
            // line 45
            echo "        <ul>
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
                // line 47
                echo "                <li>
                    ";
                // line 48
                echo twig_escape_filter($this->env, $context["animal"], "html", null, true);
                echo "
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        </ul>
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 54, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            echo "        ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
    ";
        // line 58
        if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, (isset($context["ave"]) || array_key_exists("ave", $context) ? $context["ave"] : (function () { throw new RuntimeError('Variable "ave" does not exist.', 58, $this->source); })()), "color", [], "any", false, false, false, 58)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "s") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 === substr($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, -strlen($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))))) {
            // line 59
            echo "        <h1>Empieza por g</h1>
    ";
        }
        // line 61
        echo "    <hr>
    ";
        // line 63
        echo "
    <h2>";
        // line 64
        echo twig_escape_filter($this->env, min([0 => 9, 1 => 11, 2 => 6, 3 => 99, 4 => 2]), "html", null, true);
        echo "</h2>
    <h2>";
        // line 65
        echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 65, $this->source); })())), "html", null, true);
        echo "</h2>
    <h2>";
        // line 66
        echo twig_escape_filter($this->env, max([0 => 9, 1 => 11, 2 => 6, 3 => 99, 4 => 2]), "html", null, true);
        echo "</h2>

    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 100, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 69
            echo "        ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    
    <hr>

    ";
        // line 75
        echo "
    ";
        // line 76
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 76, $this->source); })())), "html", null, true);
        echo "
    
    ";
        // line 78
        $context["email"] = "     rodri2007roo@gmail.com       ";
        // line 79
        echo "    ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_replace_filter(twig_lower_filter($this->env, twig_trim_filter((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 79, $this->source); })()))), "email@gmai.com"));
        echo "

    <hr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/animales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 79,  276 => 78,  271 => 76,  268 => 75,  263 => 71,  254 => 69,  250 => 68,  245 => 66,  241 => 65,  237 => 64,  234 => 63,  231 => 61,  227 => 59,  225 => 58,  222 => 57,  213 => 55,  209 => 54,  206 => 53,  202 => 51,  193 => 48,  190 => 47,  186 => 46,  183 => 45,  181 => 44,  178 => 43,  175 => 41,  171 => 39,  167 => 37,  165 => 36,  162 => 35,  159 => 33,  154 => 30,  150 => 29,  147 => 28,  142 => 25,  138 => 24,  135 => 23,  129 => 19,  126 => 18,  123 => 17,  120 => 15,  118 => 13,  108 => 12,  96 => 9,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/master.html.twig\" %}

{% block title %}
    Animales
{% endblock %}

{% block header %}
    {{parent()}}
    <h2>{{ title }}</h2>
{% endblock %}

{% block content %}
    {# <h2>Tu nombre es: {{ name }} {{ apellidos }}</h2>
    <h2>Tu nombre de usuario es: {{ username }}</h2> #}

    {# Variables en las vistas twig #}
    {% set perro = 'Pastor Aleman' %}
    <h3>
        {{ perro }}
    </h3>

    {# Trabajar con arrays #}

    {{ dump(animales) }}
    {{ animales[2] }}

    {# Trabajar con arrays asociativos #}

    {{ dump(ave) }}
    {{ ave.tipo ~ ' - ' ~ ave.raza }}

    {# Estructuras de control en twig #}

    {# condicional #}

    {% if ave.tipo == 'palomo' %}
        <h2>Ciudado un palomo</h2>
    {% else %}
        <h2>No hay palomos a la vista</h2>
    {% endif %}

    {# Bucle #}

    {% if animales|length > 0 %}
        <ul>
            {% for animal in animales %}
                <li>
                    {{ animal }}
                </li>
            {% endfor %}
        </ul>
    {% endif %}

    {% for i in 0..animales|length %}
        {{ i }}
    {% endfor %}

    {% if ave.color ends with 's' %}
        <h1>Empieza por g</h1>
    {% endif %}
    <hr>
    {# Funciones predefinidas #}

    <h2>{{ min([9,11,6,99,2]) }}</h2>
    <h2>{{ random(animales) }}</h2>
    <h2>{{ max([9,11,6,99,2]) }}</h2>

    {% for i in range(0, 100, 5) %}
        {{ i }}<br>
    {% endfor %}
    
    <hr>

    {# Pipes #}

    {{ animales|length }}
    
    {% set email = '     rodri2007roo@gmail.com       ' %}
    {{ dump(email|trim|lower|replace('email@gmai.com')) }}

    <hr>
{% endblock %}
", "home/animales.html.twig", "/opt/lampp/htdocs/aprendiendo_symfony/templates/home/animales.html.twig");
    }
}
