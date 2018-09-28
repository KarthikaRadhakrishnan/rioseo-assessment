<?php

/* Admin/Employee/employee-list.twig */
class __TwigTemplate_a076e7df65150aeacc7ff44198b0e0e9083cbf3626fe4fc3beaa1ec372282677 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/index.twig", "Admin/Employee/employee-list.twig", 1);
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
              All Employees
              <span id=\"flashMsg\" class=\"alert alert-";
        // line 9
        echo twig_escape_filter($this->env, ($context["flashClass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["flash"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[($context["flashClass"] ?? null)] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "html", null, true);
        echo "</span>
            <div style=\"float:right;\">
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("createEmployee"), "html", null, true);
        echo "\" class=\"btn btn-info\">Add Employee</a>
            </div>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                  <thead>
                    <tr>
                       <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Job Title</th>
                      <th>Location</th>
                      <th data-orderable=\"false\"></th> 
                       <th data-orderable=\"false\"></th> 
                    </tr>
                  </thead>
                  
                   <tbody>
            ";
        // line 30
        if (($context["employees"] ?? null)) {
            // line 31
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 32
                echo "                    <tr>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "first_name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "last_name", array()), "html", null, true);
                echo " </td>
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "title", array()), "job_title", array()), "html", null, true);
                echo "</td>
                        <td class=\"location-bg-color\"><b>
                        ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "employee_locations", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["locations"]) {
                    // line 39
                    echo "                            <span data-toggle=\"tooltip\" 
                        data-html=\"true\" title=\"<p>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locations"], "address", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locations"], "city", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locations"], "postal_code", array()), "html", null, true);
                    echo "</p>
                        <p>";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locations"], "state", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locations"], "country", array()), "html", null, true);
                    echo "</p><p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locations"], "phone", array()), "html", null, true);
                    echo "</p>\">
                         ";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locations"], "location_name", array()), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                        echo ", ";
                    }
                    echo " 
                         </span>
                         ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locations'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                          </b></td>
                        <td><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("editEmployee", array("id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\">Edit</a></td>
                        <td>
                            <form action=\"?\" method=\"POST\" id=\"deleteEmployee";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo "\"> 
                                <input class=\"btn btn-danger\" type = \"button\" value =\"Delete\" onclick=\"deleteEmployee(";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo ");\">
                                 <input type=\"hidden\" id=\"deletePath_";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo "\" name=\"deletePath\" value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("deleteEmployee", array("id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                echo "\">
                            </form>
                            
                        </td>
                    </tr>
                   
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo " 
                    ";
        } else {
            // line 58
            echo "                        <p>No records found</p>
                ";
        }
        // line 60
        echo "                    </tbody>
                </table>
                </div>
                </div>
                </div>

";
    }

    public function getTemplateName()
    {
        return "Admin/Employee/employee-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 60,  191 => 58,  187 => 56,  172 => 50,  168 => 49,  164 => 48,  159 => 46,  156 => 45,  136 => 42,  128 => 41,  120 => 40,  117 => 39,  100 => 38,  95 => 36,  91 => 35,  85 => 34,  81 => 33,  78 => 32,  73 => 31,  71 => 30,  49 => 11,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Admin/index.twig\" %}

{% block content %}
<!-- DataTables Example -->
          <div class=\"card mb-3\">
            <div class=\"card-header\">
              <i class=\"fas fa-user-cog\"></i>
              All Employees
              <span id=\"flashMsg\" class=\"alert alert-{{flashClass}}\">{{ flash[flashClass][0] }}</span>
            <div style=\"float:right;\">
            <a href=\"{{path_for('createEmployee')}}\" class=\"btn btn-info\">Add Employee</a>
            </div>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                  <thead>
                    <tr>
                       <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Job Title</th>
                      <th>Location</th>
                      <th data-orderable=\"false\"></th> 
                       <th data-orderable=\"false\"></th> 
                    </tr>
                  </thead>
                  
                   <tbody>
            {% if employees %}
            {% for row in employees %}
                    <tr>
                        <td>{{ row.id }}</td>
                        <td>{{ row.first_name }} {{ row.last_name}} </td>
                        <td>{{ row.email }}</td>
                        <td>{{row.title.job_title}}</td>
                        <td class=\"location-bg-color\"><b>
                        {% for locations in row.employee_locations %}
                            <span data-toggle=\"tooltip\" 
                        data-html=\"true\" title=\"<p>{{locations.address}}, {{locations.city}}, {{locations.postal_code}}</p>
                        <p>{{locations.state}}, {{locations.country}}</p><p>{{locations.phone}}</p>\">
                         {{ locations.location_name }}{% if not loop.last %}, {% endif %} 
                         </span>
                         {% endfor %}
                          </b></td>
                        <td><a href=\"{{path_for('editEmployee', {'id': row.id})}}\" class=\"btn btn-info\">Edit</a></td>
                        <td>
                            <form action=\"?\" method=\"POST\" id=\"deleteEmployee{{row.id}}\"> 
                                <input class=\"btn btn-danger\" type = \"button\" value =\"Delete\" onclick=\"deleteEmployee({{row.id}});\">
                                 <input type=\"hidden\" id=\"deletePath_{{row.id}}\" name=\"deletePath\" value=\"{{ path_for('deleteEmployee', { 'id': row.id })}}\">
                            </form>
                            
                        </td>
                    </tr>
                   
                    {% endfor %} 
                    {% else %}
                        <p>No records found</p>
                {% endif %}
                    </tbody>
                </table>
                </div>
                </div>
                </div>

{% endblock content %}", "Admin/Employee/employee-list.twig", "C:\\xampp\\htdocs\\projects\\rioseo-assessment\\app\\templates\\Admin\\Employee\\employee-list.twig");
    }
}
