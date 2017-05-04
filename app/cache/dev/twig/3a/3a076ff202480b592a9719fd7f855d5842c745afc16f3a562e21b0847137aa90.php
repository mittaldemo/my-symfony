<?php

/* AppBundle:Defaults:product.html.twig */
class __TwigTemplate_4c8af21415a4420887848d73726c49f9dc4597420eba934ac0de76872c1e883d extends Twig_Template
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
        $__internal_c02fb9f1dd2cc3223cb139a37b5952f2604881fe37d15db04376324a000d332d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02fb9f1dd2cc3223cb139a37b5952f2604881fe37d15db04376324a000d332d->enter($__internal_c02fb9f1dd2cc3223cb139a37b5952f2604881fe37d15db04376324a000d332d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Defaults:product.html.twig"));

        // line 1
        echo "<table border=\"1\">
\t<tr>
\t\t<th>Name</th>
\t\t<th>Price</th>
\t\t<th>Description</th>
\t\t<th>Category</th>
\t</tr>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "<tr>
   
   <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
   <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
   <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td>
   <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "category", array()), "name", array()), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
</table>";
        
        $__internal_c02fb9f1dd2cc3223cb139a37b5952f2604881fe37d15db04376324a000d332d->leave($__internal_c02fb9f1dd2cc3223cb139a37b5952f2604881fe37d15db04376324a000d332d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Defaults:product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  51 => 14,  47 => 13,  43 => 12,  39 => 11,  35 => 9,  31 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table border=\"1\">
\t<tr>
\t\t<th>Name</th>
\t\t<th>Price</th>
\t\t<th>Description</th>
\t\t<th>Category</th>
\t</tr>
{% for product in products %}
<tr>
   
   <td>{{ product.name }}</td>
   <td>{{ product.price }}</td>
   <td>{{ product.description }}</td>
   <td>{{ product.category.name }}</td>
</tr>
{% endfor %}

</table>", "AppBundle:Defaults:product.html.twig", "/var/www/html/www/my_symfony/src/AppBundle/Resources/views/Defaults/product.html.twig");
    }
}
