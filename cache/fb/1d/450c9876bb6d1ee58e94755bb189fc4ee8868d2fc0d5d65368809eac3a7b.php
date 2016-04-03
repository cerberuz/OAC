<?php

/* home.html.twig */
class __TwigTemplate_fb1d450c9876bb6d1ee58e94755bb189fc4ee8868d2fc0d5d65368809eac3a7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("main.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"home\">
    <div class=\"welcome\">
        <h1>";
        // line 5
        echo strtr(gettext("Bienvenido, %usuario%"), array("%usuario%" => (isset($context["usuario"]) ? $context["usuario"] : null), ));
        echo "</h1>
        <p>";
        // line 6
        echo gettext("OAC sistema, Sistema de control de Atendimientos basado en web.");
        echo "</p>
    </div>
    <div id=\"modules\">
        <div id=\"modules-search\">
            <input id=\"search-input\" type=\"text\" placeholder=\"";
        // line 10
        echo gettext("buscar");
        echo "\" onkeyup=\"SGA.Home.filter()\" class=\"form-control\" />
            <script type=\"text/javascript\"> document.getElementById('search-input').focus() </script>
        </div>
        ";
        // line 13
        if (((isset($context["unidade"]) ? $context["unidade"] : null) && (isset($context["modulosUnidade"]) ? $context["modulosUnidade"] : null))) {
            // line 14
            echo "        <div class=\"list unidade\">
            <h2>Unidades</h2>
            <p>";
            // line 16
            echo gettext("Visualice abajo los módulos disponibles para su unidad");
            echo "</p>
            <ul>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modulosUnidade"]) ? $context["modulosUnidade"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 19
                echo "                <li>
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
                echo "/modules/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "chave"), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "images/icon.png", $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "chave"))), "html", null, true);
                echo "\" />
                        <span class=\"name\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "nome"), "html", null, true);
                echo "</span>
                    </a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </ul>
        </div>
        ";
        }
        // line 29
        echo "        ";
        if ((isset($context["modulosGlobal"]) ? $context["modulosGlobal"] : null)) {
            // line 30
            echo "        <div class=\"list global\">
            <h2>";
            // line 31
            echo gettext("Global");
            echo "</h2>
            <p>";
            // line 32
            echo gettext("Visualice abajo los módulos globales disponibles que usted accesa");
            echo "</p>
            <ul>
                ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modulosGlobal"]) ? $context["modulosGlobal"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 35
                echo "                <li>
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
                echo "/modules/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "chave"), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 37
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "images/icon.png", $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "chave"))), "html", null, true);
                echo "\"/>
                        <span class=\"name\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "nome"), "html", null, true);
                echo "</span>
                    </a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </ul>
        </div>
        ";
        }
        // line 45
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  137 => 42,  127 => 38,  123 => 37,  117 => 36,  114 => 35,  110 => 34,  105 => 32,  101 => 31,  98 => 30,  95 => 29,  90 => 26,  80 => 22,  76 => 21,  70 => 20,  67 => 19,  63 => 18,  58 => 16,  54 => 14,  52 => 13,  46 => 10,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
