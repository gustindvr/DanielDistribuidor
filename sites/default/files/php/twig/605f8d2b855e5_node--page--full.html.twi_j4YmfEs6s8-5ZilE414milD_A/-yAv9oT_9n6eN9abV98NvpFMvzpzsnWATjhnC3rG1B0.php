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
    <a href=\"#block-distribuidora-page-title\"><i class=\"fas fa-arrow-circle-up fa-3x\"></i></a>
  </div>

  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lista_de_productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista_producto"]) {
            // line 9
            echo "  <button id=\"menu\"><i class=\"fas fa-hamburger fa-3x\"></i></button>
  <nav class=\"navbar\">
    <ul>
      <li>
        <a href=\"#";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["lista_producto"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "marca", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["lista_producto"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "marca", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</a>
      </li>
    </ul>
  </nav>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista_producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
  <main class=\"catalogo\">

    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lista_de_productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista_producto"]) {
            // line 22
            echo "      <div class=\"marca\"  >
        <h2 id=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["lista_producto"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "marca", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["lista_producto"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "marca", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</h2>

        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["lista_producto"]);
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 26
                echo "
          <div class=\"product\" data-aos=\"flip-up\">

            <h3>";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "product_title", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "</h3>
            <div class=\"img_size\">
              <img src=\"";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "imagen_url", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "\" />
            </div>
            <p class=\"footer_product\">
              <strong> Precio: \$";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "precio", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "</strong>
              <strong>Cod: ";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "codigo", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "</strong>
            </p>

            ";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "oferta", [], "any", false, false, true, 38) == true)) {
                    // line 39
                    echo "              <div class=\"sale\">
                <strong>Oferta: \$</strong>";
                    // line 40
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "oferta", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 43
                echo "
          </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista_producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
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
        return array (  148 => 50,  140 => 47,  131 => 43,  125 => 40,  122 => 39,  120 => 38,  114 => 35,  110 => 34,  104 => 31,  99 => 29,  94 => 26,  90 => 25,  83 => 23,  80 => 22,  76 => 21,  71 => 18,  58 => 13,  52 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"container\">

  <div class=\"up\">
    <a href=\"#block-distribuidora-page-title\"><i class=\"fas fa-arrow-circle-up fa-3x\"></i></a>
  </div>

  {% for lista_producto in lista_de_productos %}
  <button id=\"menu\"><i class=\"fas fa-hamburger fa-3x\"></i></button>
  <nav class=\"navbar\">
    <ul>
      <li>
        <a href=\"#{{lista_producto[0].marca}}\">{{lista_producto[0].marca}}</a>
      </li>
    </ul>
  </nav>
  {% endfor %}

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
        static $tags = array("for" => 8, "if" => 38);
        static $filters = array("escape" => 13);
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
