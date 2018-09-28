<?php

/* Admin/Employee/employee-edit-form.twig */
class __TwigTemplate_360ae24f17a88344a6c4b75418a4aa4972911d584ddf73a8a3c9e45ee4566004 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/index.twig", "Admin/Employee/employee-edit-form.twig", 1);
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
              <i class=\"fas fa-user-cog\"></i>
              Edit Employees
              <span id=\"flashMsg\" class=\"alert alert-";
        // line 9
        echo twig_escape_filter($this->env, ($context["flashClass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["flash"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[($context["flashClass"] ?? null)] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "html", null, true);
        echo "</span>
            </div>
            <div class=\"card-body\">
              
            <form class=\"form-role-add\" method=\"POST\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("employeeEditAction", array("id" => twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "id", array()))), "html", null, true);
        echo "\">
                        <div class=\"form-group\">
                                <label for=\"first_name\" class=\"control-label\">First Name</label>
                                <input type=\"text\" class=\"form-control\" id=\"first_name\" name=\"first_name\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "first_name", array()), "html", null, true);
        echo "\" required>
                        </div>\t

                        <div class=\"form-group\"> 
                                <label for=\"last_name\" class=\"control-label\">Last Name</label>
                                <input type=\"text\" class=\"form-control\" id=\"last_name\" name=\"last_name\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "last_name", array()), "html", null, true);
        echo "\" required>
                        </div>\t\t\t\t\t

                        <div class=\"form-group\"> 
                                <label for=\"email\" class=\"control-label\">Email</label>
                                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "email", array()), "html", null, true);
        echo "\" required>
                        </div>\t

                        <div class=\"form-group\"> 
                                <label for=\"job_title_id\" class=\"control-label\">Job Title</label>
                                <select class=\"form-control\" id=\"job_title_id\" name=\"job_title_id\" required>
                                    <option value=\"\">Select Job Title</option>
                                        ";
        // line 33
        if (($context["roles"] ?? null)) {
            // line 34
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 35
                echo "                                                ";
                $context["selected"] = "";
                // line 36
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "id", array()) == twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "job_title_id", array()))) {
                    // line 37
                    echo "                                                    ";
                    $context["selected"] = "selected";
                    // line 38
                    echo "                                                ";
                }
                // line 39
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["selected"] ?? null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "job_title", array()), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                                        ";
        }
        // line 42
        echo "                                </select>
                        </div>
                         <div class=\"form-group\">  
                             
                             <select id=\"location_id\" class=\"form-control\" name=\"location_id[]\" multiple>
                                    ";
        // line 47
        if (($context["locations"] ?? null)) {
            // line 48
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 49
                echo "                                                 ";
                $context["selectedLocation"] = "";
                // line 50
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", array()), "html", null, true);
                echo "\"  ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "id", array()), twig_split_filter($this->env, ($context["assignedLocations"] ?? null), ","))) {
                    echo " ";
                    $context["selectedLocation"] = "selected";
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["selectedLocation"] ?? null), "html", null, true);
                    echo " ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_name", array()), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                        ";
        }
        // line 53
        echo "                             </select>
                            </div>
                        <div class=\"form-group\"> 
                                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                        </div>     

                </form>\t
                </div>
                </div>
         

";
    }

    public function getTemplateName()
    {
        return "Admin/Employee/employee-edit-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  154 => 52,  135 => 50,  132 => 49,  127 => 48,  125 => 47,  118 => 42,  115 => 41,  102 => 39,  99 => 38,  96 => 37,  93 => 36,  90 => 35,  85 => 34,  83 => 33,  73 => 26,  65 => 21,  57 => 16,  51 => 13,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Admin/index.twig\" %}

{% block content %}
<!-- DataTables Example -->
          <div class=\"card mb-3\">
            <div class=\"card-header\">
              <i class=\"fas fa-user-cog\"></i>
              Edit Employees
              <span id=\"flashMsg\" class=\"alert alert-{{flashClass}}\">{{ flash[flashClass][0] }}</span>
            </div>
            <div class=\"card-body\">
              
            <form class=\"form-role-add\" method=\"POST\" action=\"{{ path_for(\"employeeEditAction\", {'id' : employee.id }) }}\">
                        <div class=\"form-group\">
                                <label for=\"first_name\" class=\"control-label\">First Name</label>
                                <input type=\"text\" class=\"form-control\" id=\"first_name\" name=\"first_name\" value=\"{{employee.first_name}}\" required>
                        </div>\t

                        <div class=\"form-group\"> 
                                <label for=\"last_name\" class=\"control-label\">Last Name</label>
                                <input type=\"text\" class=\"form-control\" id=\"last_name\" name=\"last_name\" value=\"{{employee.last_name}}\" required>
                        </div>\t\t\t\t\t

                        <div class=\"form-group\"> 
                                <label for=\"email\" class=\"control-label\">Email</label>
                                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{employee.email}}\" required>
                        </div>\t

                        <div class=\"form-group\"> 
                                <label for=\"job_title_id\" class=\"control-label\">Job Title</label>
                                <select class=\"form-control\" id=\"job_title_id\" name=\"job_title_id\" required>
                                    <option value=\"\">Select Job Title</option>
                                        {% if roles %}
                                            {% for row in roles %}
                                                {% set selected = '' %}
                                                    {% if row.id == employee.job_title_id %}
                                                    {% set selected = 'selected' %}
                                                {% endif %}
                                                    <option value=\"{{row.id}}\" {{ selected }}>{{row.job_title}}</option>
                                            {% endfor %}
                                        {% endif %}
                                </select>
                        </div>
                         <div class=\"form-group\">  
                             
                             <select id=\"location_id\" class=\"form-control\" name=\"location_id[]\" multiple>
                                    {% if locations %}
                                            {% for location in locations %}
                                                 {% set selectedLocation = '' %}
                                                    <option value=\"{{location.id}}\"  {% if location.id in assignedLocations|split(',') %} {% set selectedLocation = 'selected' %} {{selectedLocation}} {% endif %}>{{location.location_name}}</option>
                                            {% endfor %}
                                        {% endif %}
                             </select>
                            </div>
                        <div class=\"form-group\"> 
                                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                        </div>     

                </form>\t
                </div>
                </div>
         

{% endblock content %}", "Admin/Employee/employee-edit-form.twig", "C:\\xampp\\htdocs\\projects\\rioseo-assessment\\app\\templates\\Admin\\Employee\\employee-edit-form.twig");
    }
}
