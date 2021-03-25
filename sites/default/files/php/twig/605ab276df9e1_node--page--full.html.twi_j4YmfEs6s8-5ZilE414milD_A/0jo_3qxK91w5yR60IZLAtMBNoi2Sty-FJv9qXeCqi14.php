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
  
  <div class=\"catalogo\">

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lista_de_productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista_producto"]) {
            // line 7
            echo "      <div class=\"marca\">
        <h2>";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["lista_producto"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "marca", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</h2>

        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["lista_producto"]);
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 11
                echo "
          <!--";
                // line 12
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_var_dump($this->env, $context, ...[0 => $this->sandbox->ensureToStringAllowed($context["product"], 12, $this->source)]), "html", null, true);
                echo "-->
          <div class=\"product\">
            <h3>";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "product_title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "</h3>
            <img alt=\"";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, true, 15), 15, $this->source)]), "html", null, true);
                echo "\"/>
            <p class=\"footer_product\">
              <strong> Precio: \$";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "precio", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</strong>
              <strong>Cod: ";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "codigo", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "</strong>
            </p>
            <!--
            ";
                // line 21
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "oferta", [], "any", false, false, true, 21) == true)) {
                    // line 22
                    echo "              <div class=\"sale\">
                ";
                    // line 23
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "oferta", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 26
                echo "            -->
          </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista_producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
  </div>

  <div class=\"footer\">
    <div class=\"contact\">
      <strong>Distribuidor:</strong>
      Daniel Del Valle Rodriguez
      <strong>Contacto:</strong> 1111111111 
      <strong>E-mail:</strong> danieldvr@hotmail.com
    </div>
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
        return array (  119 => 33,  111 => 30,  102 => 26,  96 => 23,  93 => 22,  91 => 21,  85 => 18,  81 => 17,  74 => 15,  70 => 14,  65 => 12,  62 => 11,  58 => 10,  53 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"container\">
  
  <div class=\"catalogo\">

    {% for lista_producto in lista_de_productos %}
      <div class=\"marca\">
        <h2>{{ lista_producto[0].marca }}</h2>

        {% for product in lista_producto %}

          <!--{{dump(product)}}-->
          <div class=\"product\">
            <h3>{{ product.product_title }}</h3>
            <img alt=\"{{ product.image }}\" src=\"{{ file_url(product.image) }}\"/>
            <p class=\"footer_product\">
              <strong> Precio: \${{ product.precio }}</strong>
              <strong>Cod: {{product.codigo}}</strong>
            </p>
            <!--
            {% if product.oferta == true %}
              <div class=\"sale\">
                {{ product.oferta }}
              </div>
            {% endif %}
            -->
          </div>

        {% endfor %}

      </div>
    {% endfor %}

  </div>

  <div class=\"footer\">
    <div class=\"contact\">
      <strong>Distribuidor:</strong>
      Daniel Del Valle Rodriguez
      <strong>Contacto:</strong> 1111111111 
      <strong>E-mail:</strong> danieldvr@hotmail.com
    </div>
  </div>
</div>", "themes/distribuidora/templates/node-type/node--page--full.html.twig", "/var/www/html/DanielDistribuidor/themes/distribuidora/templates/node-type/node--page--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 6, "if" => 21);
        static $filters = array("escape" => 8);
        static $functions = array("dump" => 12, "file_url" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                ['dump', 'file_url']
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
