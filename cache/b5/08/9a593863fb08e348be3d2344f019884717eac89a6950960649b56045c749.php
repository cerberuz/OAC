<?php

/* main.html.twig */
class __TwigTemplate_b5089a593863fb08e348be3d2344f019884717eac89a6950960649b56045c749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        if ((isset($context["module"]) ? $context["module"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "nome"), "html", null, true);
            echo " | ";
        }
        echo "Sistema de Control OAC</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/images/favicon.png\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/bootstrap.min.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/bootstrap-theme.min.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
        <!--[if lt IE 9]>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/html5shiv.js\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/respond.min.js\"></script>
        <![endif]-->
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/jquery.js?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/bootstrap.min.js?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/script.js?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"> 
            SGA.baseUrl = '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "'; 
            SGA.version = '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "';
            SGA.dialogs.error.title = '";
        // line 22
        echo gettext("Error");
        echo "';
            SGA.dateFormat = '";
        // line 23
        echo gettext("d/m/Y");
        echo "';
            SGA.invalidSession = '";
        // line 24
        echo gettext("Sesion Inválida. Posiblemente su usuario está siendo utilizado en otra máquina.");
        echo "';
            SGA.inactiveSession = '";
        // line 25
        echo gettext("Sescion expirada. Favor  login nuevamente.");
        echo "';
        </script>
        ";
        // line 27
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".novosga-navbar\">
                        <span class=\"sr-only\">Menu</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "\">Sistema de Control OAC</a>
                </div>
                <div class=\"collapse navbar-collapse novosga-navbar\">
                    ";
        // line 43
        if ((isset($context["unidade"]) ? $context["unidade"] : null)) {
            // line 44
            echo "                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["unidade"]) ? $context["unidade"] : null), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modulosUnidade"]) ? $context["modulosUnidade"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 49
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
                echo "/modules/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "chave"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "nome"), "html", null, true);
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                                <li>
                                    <a href=\"#dialog-unidade\" data-toggle=\"modal\">
                                        ";
            // line 53
            echo gettext("Cambiar unidad");
            // line 54
            echo "                                        &nbsp;<span class=\"glyphicon glyphicon-transfer\"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    ";
        } else {
            // line 61
            echo "                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\">
                            <a href=\"#dialog-unidade\" class=\"dropdown-toggle\" data-toggle=\"modal\">";
            // line 63
            echo gettext("Escoger unidad");
            echo "</a>
                        </li>
                    </ul>
                    ";
        }
        // line 67
        echo "                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 69
        echo gettext("Global");
        echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modulosGlobal"]) ? $context["modulosGlobal"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
            // line 72
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "chave"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "nome"), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </ul>
                        </li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nome"), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/profile\"><span class=\"glyphicon glyphicon-user\"></span> ";
        echo gettext("Perfil");
        echo "</a></li>
                                <li><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/logout\"><span class=\"glyphicon glyphicon-off\"></span> ";
        echo gettext("Salir");
        echo "</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"container\">
            ";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "        </div>
        <div id=\"footer\">
            <p>Oficina de Atencion al Ciudadano</p>
        </div>
        <div id=\"dialog-unidade\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
        // line 101
        echo gettext("Unidad");
        echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div>
                            <label>";
        // line 105
        echo gettext("Favor escoger una unidad");
        echo "</label>
                            <select id=\"unidade\" class=\"form-control\">
                                <option value=\"\">";
        // line 107
        echo gettext("Seleccione");
        echo "</option>
                                ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) ? $context["unidades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 109
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id") == $this->getAttribute((isset($context["unidade"]) ? $context["unidade"] : null), "id"))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "nome"), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\" onclick=\"SGA.Unidades.set()\">";
        // line 115
        echo gettext("Enviar");
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 120
        if (((!(isset($context["unidade"]) ? $context["unidade"] : null)) && (!(isset($context["modulo"]) ? $context["modulo"] : null)))) {
            // line 121
            echo "        <script type=\"text/javascript\"> SGA.Unidades.show(); </script>
        ";
        }
        // line 123
        echo "        <span id=\"ajax-loading\" class=\"mini-loading\" style=\"display:none\"></span>
    </body>
</html>
";
    }

    // line 27
    public function block_head($context, array $blocks = array())
    {
        // line 28
        echo "        ";
    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
        // line 91
        echo "            ";
    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 91,  329 => 90,  325 => 28,  322 => 27,  315 => 123,  311 => 121,  309 => 120,  301 => 115,  295 => 111,  280 => 109,  276 => 108,  272 => 107,  267 => 105,  260 => 101,  249 => 92,  247 => 90,  234 => 82,  228 => 81,  223 => 79,  216 => 74,  203 => 72,  199 => 71,  194 => 69,  190 => 67,  183 => 63,  179 => 61,  170 => 54,  168 => 53,  164 => 51,  151 => 49,  147 => 48,  138 => 44,  136 => 43,  130 => 40,  115 => 27,  106 => 24,  102 => 23,  94 => 21,  83 => 18,  77 => 17,  71 => 16,  66 => 14,  62 => 13,  55 => 11,  49 => 10,  43 => 9,  30 => 5,  24 => 2,  21 => 1,  142 => 46,  137 => 42,  127 => 38,  123 => 37,  117 => 29,  114 => 35,  110 => 25,  105 => 32,  101 => 31,  98 => 22,  95 => 29,  90 => 20,  80 => 22,  76 => 21,  70 => 20,  67 => 19,  63 => 18,  58 => 16,  54 => 14,  52 => 13,  46 => 10,  39 => 8,  35 => 5,  31 => 3,  28 => 2,);
    }
}
