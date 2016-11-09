<?php

/* partials/debug.html.twig */
class __TwigTemplate_c21dadddc31acfe8bfca434cb82c7e599cf41f0ea8a12008645cc8828fa0a2e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter("### Compagnies");
        echo "

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 4
            echo "  ";
            if (($this->getAttribute($context["entity"], "type", array()) == "company")) {
                // line 5
                echo "    ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter(("! #### " . $this->getAttribute($context["entity"], "name", array())));
                echo "
    ";
                // line 6
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter((((("![" . $this->getAttribute($context["entity"], "name", array())) . "](https://api.abibao.com/administrator/") . $this->getAttribute($context["entity"], "icon", array())) . ")"));
                echo "
    ";
                // line 7
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute($context["entity"], "description", array()));
                echo "
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 12
            echo "  ";
            if (($this->getAttribute($context["entity"], "type", array()) == "charity")) {
                // line 13
                echo "    ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter(("!!! #### " . $this->getAttribute($context["entity"], "name", array())));
                echo "
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  56 => 12,  52 => 11,  49 => 10,  40 => 7,  36 => 6,  31 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "{{ \"### Compagnies\"|markdown }}

{% for entity in result %}
  {% if entity.type==\"company\" %}
    {{ \"! #### #{entity.name}\"|markdown }}
    {{ \"![#{entity.name}](https://api.abibao.com/administrator/#{entity.icon})\"|markdown }}
    {{ \"#{entity.description}\"|markdown }}
  {% endif %}
{% endfor %}

{% for entity in result %}
  {% if entity.type==\"charity\" %}
    {{ \"!!! #### #{entity.name}\"|markdown }}
  {% endif %}
{% endfor %}
";
    }
}
