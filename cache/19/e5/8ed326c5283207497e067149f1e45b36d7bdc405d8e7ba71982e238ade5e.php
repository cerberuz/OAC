<?php

/* relatorios/atendimentos_status.html.twig */
class __TwigTemplate_19e58ed326c5283207497e067149f1e45b36d7bdc405d8e7ba71982e238ade5e extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["relatorio"]) ? $context["relatorio"] : null), "dados"));
        foreach ($context['_seq'] as $context["_key"] => $context["dado"]) {
            // line 2
            echo "<div class=\"header\">
    <h2>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dado"]) ? $context["dado"] : null), "unidade"), "html", null, true);
            echo "</h2>
    <p>";
            // line 4
            echo strtr(gettext("Período de %dataInicial% a %dataFinal%"), array("%dataInicial%" => (isset($context["dataInicial"]) ? $context["dataInicial"] : null), "%dataFinal%" => (isset($context["dataFinal"]) ? $context["dataFinal"] : null), ));
            echo "</p>
</div>
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>";
            // line 9
            echo gettext("Señal|Ticket");
            echo "</th>
            <th>";
            // line 10
            echo gettext("Cliente");
            echo "</th>
            <th>";
            // line 11
            echo gettext("Data");
            echo "</th>
            <th title=\"";
            // line 12
            echo gettext("Hora de Llamada");
            echo "\">";
            echo gettext("Chamada");
            echo "</th>
            <th title=\"";
            // line 13
            echo gettext("Hora de Inicio de atención");
            echo "\">";
            echo gettext("Inicio");
            echo "</th>
            <th title=\"";
            // line 14
            echo gettext("Hora de Fin de atención");
            echo "\">";
            echo gettext("Fin");
            echo "</th>
            <th title=\"";
            // line 15
            echo gettext("Servicio escogido en triage");
            echo "\">";
            echo gettext("Servicio Triado");
            echo "</th>
            <th>";
            // line 16
            echo gettext("Status");
            echo "</th>
            <th>";
            // line 17
            echo gettext("Analista");
            echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dado"]) ? $context["dado"] : null), "atendimentos"));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 22
                echo "        <tr>
            <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "siglaSenha"), "html", null, true);
                if ((isset($context["isNumeracaoServico"]) ? $context["isNumeracaoServico"] : null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "numeroSenhaServico"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "numeroSenha"), "html", null, true);
                }
                echo "</td>
            <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "nomeCliente"), "html", null, true);
                echo "</td>
            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "dataChegada"), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "dataChamada"), "H:i:s"), "html", null, true);
                echo "</td>
            <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "dataInicio"), "H:i:s"), "html", null, true);
                echo "</td>
            <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "dataFim"), "H:i:s"), "html", null, true);
                echo "</td>
            <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "servico"), "nome"), "html", null, true);
                echo "</td>
            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "nomeStatus"), "html", null, true);
                echo "</td>
            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "usuario"), "login"), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </tbody>
</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "relatorios/atendimentos_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  92 => 23,  89 => 22,  85 => 21,  78 => 17,  74 => 16,  68 => 15,  62 => 14,  56 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
