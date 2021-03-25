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

/* themes/distribuidora/templates/node-type/node--page--full.html.twig */
class __TwigTemplate_0e46640a01f967d4ddb4574a47d2cb9f2279ddfb1f4c95460af258a6b53697d8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<div class=\"container\">
  <div class=\"left-sidebar\">
  
  </div>
  <div class=\"catalogo\">

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lista_de_productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista_producto"]) {
            // line 9
            echo "      <div class=\"marca\">
        <h2>";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["lista_producto"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "marca", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</h2>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["lista_producto"]);
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_var_dump($this->env, $context, ...[0 => $this->sandbox->ensureToStringAllowed($context["product"], 12, $this->source)]), "html", null, true);
                echo "//
          <div class=\"product\">
            <h3>";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "product_title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "</h3>
            <p>
              <strong> Precio: \$";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "precio", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</strong>
              Cod: ";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "codigo", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "
            </p>

            <!-- if oferta-->

          </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista_producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
  </div>


</div>";
    }

    public function getTemplateName()
    {
        return "themes/distribuidora/templates/node-type/node--page--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  92 => 25,  78 => 17,  74 => 16,  69 => 14,  63 => 12,  59 => 11,  55 => 10,  52 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"container\">
  <div class=\"left-sidebar\">
  
  </div>
  <div class=\"catalogo\">

    {% for lista_producto in lista_de_productos %}
      <div class=\"marca\">
        <h2>{{ lista_producto[0].marca }}</h2>
        {% for product in lista_producto %}
          {{dump(product)}}//
          <div class=\"product\">
            <h3>{{ product.product_title }}</h3>
            <p>
              <strong> Precio: \${{ product.precio }}</strong>
              Cod: {{product.codigo}}
            </p>

            <!-- if oferta-->

          </div>

        {% endfor %}
      </div>
    {% endfor %}

  </div>


</div>", "themes/distribuidora/templates/node-type/node--page--full.html.twig", "/var/www/html/DanielDistribuidor/themes/distribuidora/templates/node-type/node--page--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 8);
        static $filters = array("escape" => 10);
        static $functions = array("dump" => 12);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['dump']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
