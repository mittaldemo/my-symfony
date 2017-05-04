<?php

/* base.html.twig */
class __TwigTemplate_b822cafe7a6d67de09768d065fe910f90d779919094ff93fe73b21f6cd10d06d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d2674f9bd5916113290d92a8b9dbd3d4c460174f7d9f091341f88f7fc5d563a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2674f9bd5916113290d92a8b9dbd3d4c460174f7d9f091341f88f7fc5d563a->enter($__internal_8d2674f9bd5916113290d92a8b9dbd3d4c460174f7d9f091341f88f7fc5d563a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8d2674f9bd5916113290d92a8b9dbd3d4c460174f7d9f091341f88f7fc5d563a->leave($__internal_8d2674f9bd5916113290d92a8b9dbd3d4c460174f7d9f091341f88f7fc5d563a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11c1d8e946e3a09fa4bc09ef29af8748a408555be2c039a2b4302ce67ea71eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c1d8e946e3a09fa4bc09ef29af8748a408555be2c039a2b4302ce67ea71eca->enter($__internal_11c1d8e946e3a09fa4bc09ef29af8748a408555be2c039a2b4302ce67ea71eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_11c1d8e946e3a09fa4bc09ef29af8748a408555be2c039a2b4302ce67ea71eca->leave($__internal_11c1d8e946e3a09fa4bc09ef29af8748a408555be2c039a2b4302ce67ea71eca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d05efd24b15cc0d90410aee85da0a7ea9d93352337b2b9b2ece93be23fedc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d05efd24b15cc0d90410aee85da0a7ea9d93352337b2b9b2ece93be23fedc02->enter($__internal_3d05efd24b15cc0d90410aee85da0a7ea9d93352337b2b9b2ece93be23fedc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3d05efd24b15cc0d90410aee85da0a7ea9d93352337b2b9b2ece93be23fedc02->leave($__internal_3d05efd24b15cc0d90410aee85da0a7ea9d93352337b2b9b2ece93be23fedc02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_61e31b50c1c0321c82cc4463ed095061aeb2a734fb6b06d29b7de9f0a343c121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e31b50c1c0321c82cc4463ed095061aeb2a734fb6b06d29b7de9f0a343c121->enter($__internal_61e31b50c1c0321c82cc4463ed095061aeb2a734fb6b06d29b7de9f0a343c121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61e31b50c1c0321c82cc4463ed095061aeb2a734fb6b06d29b7de9f0a343c121->leave($__internal_61e31b50c1c0321c82cc4463ed095061aeb2a734fb6b06d29b7de9f0a343c121_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83776816a715a6f579c251b4adb1264d6a241a86396a93e93bc32a5024966a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83776816a715a6f579c251b4adb1264d6a241a86396a93e93bc32a5024966a91->enter($__internal_83776816a715a6f579c251b4adb1264d6a241a86396a93e93bc32a5024966a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83776816a715a6f579c251b4adb1264d6a241a86396a93e93bc32a5024966a91->leave($__internal_83776816a715a6f579c251b4adb1264d6a241a86396a93e93bc32a5024966a91_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/www/my_symfony/app/Resources/views/base.html.twig");
    }
}
