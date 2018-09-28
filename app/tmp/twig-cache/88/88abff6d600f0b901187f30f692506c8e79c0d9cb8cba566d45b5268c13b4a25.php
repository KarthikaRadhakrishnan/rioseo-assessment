<?php

/* Admin/Role/role-add-form.twig */
class __TwigTemplate_36b4404b9e9cfdfaa85d7797a8a58fd3ae7e48a84bef917ac8678b33acb593df extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/index.twig", "Admin/Role/role-add-form.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/index.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<!-- DataTables Example -->
          <div class=\"card mb-3\">
            <div class=\"card-header\">
              <i class=\"fas fa-users\"></i>
              Add Role 
            </div>
            <div class=\"card-body\">
              <form class=\"form-role-add\" method=\"POST\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("roleAddAction"), "html", null, true);
        echo "\">
                        <div class=\"form-group\"> <!-- Full Name -->
                                <label for=\"job_title\" class=\"control-label\">Job Title</label>
                                <input type=\"text\" class=\"form-control\"  name=\"job_title\" maxlength=\"19\" placeholder=\"Manager, Developer, ...\" required>
                        </div>\t

                        <div class=\"form-group\"> <!-- Submit Button -->
                                <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                                <span id=\"flashMsg\" class=\"alert alert-";
        // line 19
        echo twig_escape_filter($this->env, ($context["flashClass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["flash"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[($context["flashClass"] ?? null)] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "html", null, true);
        echo "</span>
                        </div>     

                </form>\t
                </div>
                </div>
                

";
    }

    public function getTemplateName()
    {
        return "Admin/Role/role-add-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 19,  44 => 11,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Admin/index.twig\" %}

{% block content %}
<!-- DataTables Example -->
          <div class=\"card mb-3\">
            <div class=\"card-header\">
              <i class=\"fas fa-users\"></i>
              Add Role 
            </div>
            <div class=\"card-body\">
              <form class=\"form-role-add\" method=\"POST\" action=\"{{ path_for(\"roleAddAction\") }}\">
                        <div class=\"form-group\"> <!-- Full Name -->
                                <label for=\"job_title\" class=\"control-label\">Job Title</label>
                                <input type=\"text\" class=\"form-control\"  name=\"job_title\" maxlength=\"19\" placeholder=\"Manager, Developer, ...\" required>
                        </div>\t

                        <div class=\"form-group\"> <!-- Submit Button -->
                                <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                                <span id=\"flashMsg\" class=\"alert alert-{{flashClass}}\">{{ flash[flashClass][0] }}</span>
                        </div>     

                </form>\t
                </div>
                </div>
                

{% endblock content %}", "Admin/Role/role-add-form.twig", "C:\\xampp\\htdocs\\projects\\rioseo-assessment\\app\\templates\\Admin\\Role\\role-add-form.twig");
    }
}
