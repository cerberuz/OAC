<?php

/* print.html.twig */
class __TwigTemplate_273b8e2114d195c6a123acda0b92998aec9b1f1177bbbed11255c9be2738937c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha"), "html", null, true);
        echo "</title>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/bootstrap.min.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/print.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
    <link rel=\"shortcut icon\" href=\"images/favicon.png\" />
</head>
<body onload=\"window.print(); window.close();\">
    <div id=\"senha\">
        <div id=\"senha-header\">
         <img src=\"/oac/logosilueta.jpeg\" width=\"220px\" height=\"100px\"> <br />
\t <span class=\"data\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "d/m/Y H:i"), "html", null, true);
        echo "</span>
        </div>
        <div id=\"senha-body\">
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha"), "html", null, true);
        echo "
            <span class=\"descricao\">
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "servicoUnidade"), "nome"), "html", null, true);
        echo "
            </span>   
        </div>
        <div id=\"senha-footer\">
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unidade"]) ? $context["unidade"] : null), "mensagemImpressao"), "html", null, true);
        echo "
        </div>
    </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  64 => 20,  59 => 18,  53 => 15,  41 => 8,  35 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
