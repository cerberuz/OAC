<?php

/* index.html.twig */
class __TwigTemplate_9f32054f757e2236ff6e2f4c605742474c66e4a6fc6f449ea5544d33452e166c extends Twig_Template
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
        echo gettext("Nombre de usuario");
        echo "</th>
    <th>";
        // line 4
        echo gettext("Nombre");
        echo "</th>
    <th>";
        // line 5
        echo gettext("Status");
        echo "</th>
";
    }

    // line 7
    public function block_tbody($context, array $blocks = array())
    {
        // line 8
        echo "    <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "login"), "html", null, true);
        echo "</td>
    <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "nome"), "html", null, true);
        echo "</td>
    <td>
        ";
        // line 11
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status")) {
            // line 12
            echo "        <span class=\"status-active\">";
            echo gettext("Activo");
            echo "</span>
        ";
        } else {
            // line 14
            echo "        <span class=\"status-inactive\">";
            echo gettext("Inactivo");
            echo "</span>
        ";
        }
        // line 16
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
        return array (  74 => 16,  68 => 14,  62 => 12,  60 => 11,  55 => 9,  50 => 8,  47 => 7,  41 => 5,  37 => 4,  32 => 3,  29 => 2,);
    }
}
