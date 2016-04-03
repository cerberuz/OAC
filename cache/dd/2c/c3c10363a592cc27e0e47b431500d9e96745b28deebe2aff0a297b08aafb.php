<?php

/* index.html.twig */
class __TwigTemplate_dd2cc3c10363a592cc27e0e47b431500d9e96745b28deebe2aff0a297b08aafb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("crud/list.html.twig");

        $this->blocks = array(
            'thead' => array($this, 'block_thead'),
            'tbody' => array($this, 'block_tbody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "crud/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_thead($context, array $blocks = array())
    {
        // line 3
        echo "    <th>";
        echo gettext("Nome");
        echo "</th>
";
    }

    // line 5
    public function block_tbody($context, array $blocks = array())
    {
        // line 6
        echo "    <td>
        <span style=\"padding-left: ";
        // line 7
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level") * 25), "html", null, true);
        echo "px\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "nome"), "html", null, true);
        echo "
        </span>
    </td>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  45 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
