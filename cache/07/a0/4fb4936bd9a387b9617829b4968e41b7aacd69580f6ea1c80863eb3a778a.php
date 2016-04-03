<?php

/* relatorio.html.twig */
class __TwigTemplate_07a04fb4936bd9a387b9617829b4968e41b7aacd69580f6ea1c80863eb3a778a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relatorio"]) ? $context["relatorio"] : null), "titulo"), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "css/bootstrap.min.css")), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "css/style.css")), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "css/relatorio.css", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave"))), "html", null, true);
        echo "\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "images/favicon.png")), "html", null, true);
        echo "\" />
</head>
<body>
    <div id=\"report\" class=\"container\">
        <div id=\"report-header\">
            <a href=\"javascript:window.print()\" class=\"print\">
                <span class=\"glyphicon glyphicon-print\"></span>
                ";
        // line 16
        echo gettext("Imprimir");
        // line 17
        echo "            </a>
            <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relatorio"]) ? $context["relatorio"] : null), "titulo"), "html", null, true);
        echo "</h1>
        </div>
        <div id=\"report-body\">
            ";
        // line 21
        $template = $this->env->resolveTemplate((isset($context["page"]) ? $context["page"] : null));
        $template->display($context);
        // line 22
        echo "        </div>
        <div id=\"report-footer\">
            <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relatorio"]) ? $context["relatorio"] : null), "titulo"), "html", null, true);
        echo " - Sistema de Control OAC</p>
        </div>
    </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "relatorio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  65 => 22,  62 => 21,  56 => 18,  53 => 17,  51 => 16,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
