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
    <div class=\"contact\">
      <strong>Daniel Del Valle Rodriguez</strong>
      <p>Contacto: 1111111111 </p>
      <p>E-mail: danieldvr@hotmail.com</p>
    </div>
  </div>
  <div class=\"catalogo\">

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lista_de_productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista_producto"]) {
            // line 13
            echo "      <div class=\"marca\">
        <h2>";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["lista_producto"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "marca", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</h2>

        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["lista_producto"]);
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "
          <!--";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_var_dump($this->env, $context, ...[0 => $this->sandbox->ensureToStringAllowed($context["product"], 18, $this->source)]), "html", null, true);
                echo "-->
          <div class=\"product\">
            <h3>";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "product_title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</h3>
            <img alt=\"";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, true, 21), 21, $this->source)]), "html", null, true);
                echo "\"/>
            <p class=\"footer_product\">
              <strong> Precio: \$";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "precio", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "</strong>
              <strong>Cod: ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "codigo", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "</strong>
            </p>
            <!--
            ";
                // line 27
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "oferta", [], "any", false, false, true, 27) == true)) {
                    // line 28
                    echo "              <div class=\"sale\">
                ";
                    // line 29
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "oferta", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 32
                echo "            -->
          </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista_producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
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
        return array (  125 => 39,  117 => 36,  108 => 32,  102 => 29,  99 => 28,  97 => 27,  91 => 24,  87 => 23,  80 => 21,  76 => 20,  71 => 18,  68 => 17,  64 => 16,  59 => 14,  56 => 13,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"container\">
  <div class=\"left-sidebar\">
    <div class=\"contact\">
      <strong>Daniel Del Valle Rodriguez</strong>
      <p>Contacto: 1111111111 </p>
      <p>E-mail: danieldvr@hotmail.com</p>
    </div>
  </div>
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


</div>", "themes/distribuidora/templates/node-type/node--page--full.html.twig", "/var/www/html/DanielDistribuidor/themes/distribuidora/templates/node-type/node--page--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12, "if" => 27);
        static $filters = array("escape" => 14);
        static $functions = array("dump" => 18, "file_url" => 21);

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
