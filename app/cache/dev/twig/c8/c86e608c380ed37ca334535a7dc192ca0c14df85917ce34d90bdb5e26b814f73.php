<?php

/* AppBundle:Defaults:addGroup.html.twig */
class __TwigTemplate_913a5e7679bbdba5c50b277c95a659ab419d107561c21f1b293e8b2be376b659 extends Twig_Template
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
        $__internal_2750e1cfe700556dc857e7ba66ac98e6c7e0089a3000a2e563418b41b1d3a808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2750e1cfe700556dc857e7ba66ac98e6c7e0089a3000a2e563418b41b1d3a808->enter($__internal_2750e1cfe700556dc857e7ba66ac98e6c7e0089a3000a2e563418b41b1d3a808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Defaults:addGroup.html.twig"));

        // line 1
        echo "<form name=\"\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("insert_group");
        echo "\" method=\"post\">
\t<table>
\t\t<tr><td>Enter Name</td>
\t\t\t<td><input type=\"text\" name=\"userName\" value=\"\"></td>
\t\t</tr>
\t\t<tr><td>Enter Group</td>
\t\t\t<td><input type=\"text\" name=\"userGroup\" value=\"\"></td>
\t\t</tr>
\t\t<tr><td><input type=\"submit\" name=\"s1\" value=\"Submit\"></td></tr>
\t</table>
</form>";
        
        $__internal_2750e1cfe700556dc857e7ba66ac98e6c7e0089a3000a2e563418b41b1d3a808->leave($__internal_2750e1cfe700556dc857e7ba66ac98e6c7e0089a3000a2e563418b41b1d3a808_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Defaults:addGroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form name=\"\" action=\"{{ path('insert_group')}}\" method=\"post\">
\t<table>
\t\t<tr><td>Enter Name</td>
\t\t\t<td><input type=\"text\" name=\"userName\" value=\"\"></td>
\t\t</tr>
\t\t<tr><td>Enter Group</td>
\t\t\t<td><input type=\"text\" name=\"userGroup\" value=\"\"></td>
\t\t</tr>
\t\t<tr><td><input type=\"submit\" name=\"s1\" value=\"Submit\"></td></tr>
\t</table>
</form>", "AppBundle:Defaults:addGroup.html.twig", "/var/www/html/www/my_symfony/src/AppBundle/Resources/views/Defaults/addGroup.html.twig");
    }
}
