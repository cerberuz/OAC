<?php

/* index.html.twig */
class __TwigTemplate_2b43b7c79bfd4dd0c5b365db54c180672afd42389fa5a26b1fb6a6c2448474fd extends Twig_Template
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
        echo gettext("Código");
        echo "</th>
    <th>";
        // line 4
        echo gettext("Nombre");
        echo "</th>
    <th>";
        // line 5
        echo gettext("Grupo");
        echo "</th>
    <th>";
        // line 6
        echo gettext("Status");
        echo "</th>
";
    }

    // line 8
    public function block_tbody($context, array $blocks = array())
    {
        // line 9
        echo "    <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "codigo"), "html", null, true);
        echo "</td>
    <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "nome"), "html", null, true);
        echo "</td>
    <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "grupo"), "nome"), "html", null, true);
        echo "</td>
    <td>
        ";
        // line 13
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status") == 1)) {
            // line 14
            echo "        <span class=\"status-active\">";
            echo gettext("Activo");
            echo "</span>
        ";
        } else {
            // line 16
            echo "        <span class=\"status-inactive\">";
            echo gettext("Inactivo");
            echo "</span>
        ";
        }
        // line 18
        echo "    </td>
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
        return array (  82 => 18,  76 => 16,  70 => 14,  68 => 13,  63 => 11,  59 => 10,  54 => 9,  51 => 8,  45 => 6,  41 => 5,  37 => 4,  32 => 3,  29 => 2,);
    }
}
