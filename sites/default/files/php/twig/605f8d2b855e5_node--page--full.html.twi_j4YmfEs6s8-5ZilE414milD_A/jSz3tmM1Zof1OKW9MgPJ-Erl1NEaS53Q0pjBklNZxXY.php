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

  <div class=\"up\">
    <a href=\"#node/2/title/en/full\"><i class=\"fas fa-arrow-circle-up\"></i></a>
  </div>

  <nav class=\"navbar\">
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lista_de_productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista_producto"]) {
            // line 10
            echo "    <a href=\"#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["lista_producto"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "marca", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["lista_producto"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "marca", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista_producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </nav>

  <main class=\"catalogo\">

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lista_de_productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista_producto"]) {
            // line 17
            echo "      <div class=\"marca\"  >
        <h2 id=\"";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["lista_producto"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "marca", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["lista_producto"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "marca", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</h2>

        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["lista_producto"]);
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 21
                echo "
          <div class=\"product\" data-aos=\"flip-up\">

            <h3>";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "product_title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "</h3>
            <div class=\"img_size\">
              <img src=\"";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "imagen_url", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "\" />
            </div>
            <p class=\"footer_product\">
              <strong> Precio: \$";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "precio", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "</strong>
              <strong>Cod: ";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "codigo", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "</strong>
            </p>

            ";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "oferta", [], "any", false, false, true, 33) == true)) {
                    // line 34
                    echo "              <div class=\"sale\">
                <strong>Oferta: \$</strong>";
                    // line 35
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "oferta", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 38
                echo "
          </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista_producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
  </main>

  <adress class=\"footer\">
    <ul class=\"contact\">
      <li>
        <strong>Distribuidor:</strong> Daniel Rodriguez
      </li>
      <li>
        <strong>Contacto:</strong> 1128658767 
      </li>
      <li>
      <strong>E-mail:</strong> danielrod@hotmail.com
      </li>
    </ul>
  </adress>
</div>
";
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
        return array (  142 => 45,  134 => 42,  125 => 38,  119 => 35,  116 => 34,  114 => 33,  108 => 30,  104 => 29,  98 => 26,  93 => 24,  88 => 21,  84 => 20,  77 => 18,  74 => 17,  70 => 16,  64 => 12,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"container\">

  <div class=\"up\">
    <a href=\"#node/2/title/en/full\"><i class=\"fas fa-arrow-circle-up\"></i></a>
  </div>

  <nav class=\"navbar\">
  {% for lista_producto in lista_de_productos %}
    <a href=\"#{{lista_producto[0].marca}}\">{{lista_producto[0].marca}}</a></li>
  {% endfor %}
  </nav>

  <main class=\"catalogo\">

    {% for lista_producto in lista_de_productos %}
      <div class=\"marca\"  >
        <h2 id=\"{{ lista_producto[0].marca }}\">{{ lista_producto[0].marca }}</h2>

        {% for product in lista_producto %}

          <div class=\"product\" data-aos=\"flip-up\">

            <h3>{{ product.product_title }}</h3>
            <div class=\"img_size\">
              <img src=\"{{ product.imagen_url }}\" />
            </div>
            <p class=\"footer_product\">
              <strong> Precio: \${{ product.precio }}</strong>
              <strong>Cod: {{product.codigo}}</strong>
            </p>

            {% if product.oferta == true %}
              <div class=\"sale\">
                <strong>Oferta: \$</strong>{{ product.oferta }}
              </div>
            {% endif %}

          </div>

        {% endfor %}

      </div>
    {% endfor %}

  </main>

  <adress class=\"footer\">
    <ul class=\"contact\">
      <li>
        <strong>Distribuidor:</strong> Daniel Rodriguez
      </li>
      <li>
        <strong>Contacto:</strong> 1128658767 
      </li>
      <li>
      <strong>E-mail:</strong> danielrod@hotmail.com
      </li>
    </ul>
  </adress>
</div>
", "themes/distribuidora/templates/node-type/node--page--full.html.twig", "/var/www/html/DanielDistribuidor/themes/distribuidora/templates/node-type/node--page--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "if" => 33);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                []
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
