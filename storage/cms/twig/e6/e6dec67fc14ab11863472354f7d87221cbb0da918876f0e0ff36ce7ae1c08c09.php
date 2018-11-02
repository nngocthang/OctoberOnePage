<?php

/* C:\ThangNN\WS\xampp\htdocs\OnePageLanding/themes/landingPage/partials/footer.htm */
class __TwigTemplate_365589c5d120df72fbfe9a69c79ea674eadcd0f9c50ae3013ba35c20f52a988a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer id=\"footer\" class=\"footer-hover-links-light pt-4 mt-0\">
\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 mb-4 mb-lg-0\">
\t\t\t\t<h2 class=\"font-weight-semibold text-1 mb-3\">LIÊN HỆ</h2>
\t\t\t\t<ul class=\"list list-unstyled mb-4\">
\t\t\t\t\t<li class=\"mb-2\"><i class=\"fas fa-angle-right mr-2 ml-1\"></i> <strong class=\"text-color-light\">Địa chỉ:</strong>
\t\t\t\t\t\tTầng 16 Tòa nhà Cục Tần số vô tuyến điện -<p class=\"text-center\">115 Trần Duy Hưng - Cầu giấy - Hà Nội.</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\"><i class=\"fas fa-angle-right mr-2 ml-1\"></i> <strong class=\"text-color-light\">Điện thoại:</strong>
\t\t\t\t\t\t<a href=\"tel:+84439436684\"> (+84) 043.943.6684</a></li>
\t\t\t\t\t<li class=\"mb-2\"><i class=\"fas fa-angle-right mr-2 ml-1\"></i> <strong class=\"text-color-light\">Email:</strong>
\t\t\t\t\t\t<a href=\"mailto:mail@example.com\" class=\"link-underline-light\">mail@example.com</a></li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"social-icons social-icons-transparent social-icons-iconlight social-icons-lg\">
\t\t\t\t\t<li class=\"social-icons-facebook\"><a href=\"http://www.facebook.com/\" target=\"_blank\" title=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a></li>
\t\t\t\t\t<li class=\"social-icons-googleplus\"><a href=\"https://plus.google.com/?hl=vi\" target=\"_blank\" title=\"Googleplus\"><i
\t\t\t\t\t\t\t class=\"fab fa-google-plus-g\"></i></a></li>
\t\t\t\t\t<li class=\"social-icons-skype\"><a href=\"https://www.skype.com/en/\" target=\"_blank\" title=\"skype\"><i class=\"fab fa-skype\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 mb-4 mb-lg-0\">
\t\t\t\t<h2 class=\"font-weight-semibold text-1 mb-3\">TRANG LIÊN KẾT</h2>
\t\t\t\t<ul class=\"list list-unstyled\">
\t\t\t\t\t<li class=\"mb-2\"><i class=\"fas fa-angle-right mr-2 ml-1\"></i> <a href=\"https://ais.gov.vn/home.htm\">Cục an toàn
\t\t\t\t\t\t\tthông tin</a></li>
\t\t\t\t\t<li class=\"mb-2\"><i class=\"fas fa-angle-right mr-2 ml-1\"></i> <a href=\"http://mic.gov.vn/Pages/trangchu.aspx\">Bộ
\t\t\t\t\t\t\tthông tin truyền thông</a></li>

\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<h2 class=\"font-weight-semibold text-1 mb-3\">GỬI TIN NHẮN</h2>
\t\t\t\t<form class=\"contact-form contact-form-dark form-errors-light\" action=\"php/contact-form.php\" method=\"POST\" data-request=\"onSend\">
\t\t\t\t\t<div class=\"contact-form-success alert alert-success d-none\">
\t\t\t\t\t\tTin nhắn của bạn đã được gửi thành công.
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"contact-form-error alert alert-danger d-none\">
\t\t\t\t\t\t<strong>Lỗi!</strong> Tin nhắn gửi đi không thành công.
\t\t\t\t\t\t<span class=\"mail-error-message d-block\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<input type=\"text\" value=\"\" data-msg-required=\"Chưa nhập họ tên\" maxlength=\"100\" class=\"form-control\" name=\"name\"
\t\t\t\t\t\t\t id=\"name\" placeholder=\"Họ tên\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<input type=\"email\" value=\"\" data-msg-required=\"Chưa nhập địa chỉ E-mail\" data-msg-email=\"Sai cấu trúc địa chỉ E-mail (mail@example.com)\"
\t\t\t\t\t\t\t maxlength=\"100\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"E-mail\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t<div class=\"form-group col\">
\t\t\t\t\t\t\t<input type=\"text\" value=\"\" data-msg-required=\"Chưa nhập tiêu đề\" maxlength=\"100\" class=\"form-control\" name=\"subject\"
\t\t\t\t\t\t\t id=\"subject\" placeholder=\"Tiêu đề\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t<div class=\"form-group col\">
\t\t\t\t\t\t\t<textarea maxlength=\"5000\" data-msg-required=\"Chưa nhập nội dung tin nhắn\" rows=\"5\" class=\"form-control\" name=\"message\"
\t\t\t\t\t\t\t id=\"message\" placeholder=\"Nội dung\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row mt-2\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"GỬI\" class=\"btn btn-primary btn-rounded btn-4 font-weight-semibold text-0\"
\t\t\t\t\t\t\t data-loading-text=\"Loading...\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 79
        echo $this->extensions['System\Twig\Extension']->mediaFilter("logo.png");
        echo "\" width=\"78\" height=\"70\" alt=\"NCSC-logo\" class=\"img-fluid\" /></a>
\t\t\t\t\t<p class=\"pt-3 pb-5\">Bản quyền thuộc Trung tâm giám sát an toàn không gian mạng quốc gia. </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/landingPage/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 79,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"footer\" class=\"footer-hover-links-light pt-4 mt-0\">
\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 mb-4 mb-lg-0\">
\t\t\t\t<h2 class=\"font-weight-semibold text-1 mb-3\">LIÊN HỆ</h2>
\t\t\t\t<ul class=\"list list-unstyled mb-4\">
\t\t\t\t\t<li class=\"mb-2\"><i class=\"fas fa-angle-right mr-2 ml-1\"></i> <strong class=\"text-color-light\">Địa chỉ:</strong>
\t\t\t\t\t\tTầng 16 Tòa nhà Cục Tần số vô tuyến điện -<p class=\"text-center\">115 Trần Duy Hưng - Cầu giấy - Hà Nội.</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\"><i class=\"fas fa-angle-right mr-2 ml-1\"></i> <strong class=\"text-color-light\">Điện thoại:</strong>
\t\t\t\t\t\t<a href=\"tel:+84439436684\"> (+84) 043.943.6684</a></li>
\t\t\t\t\t<li class=\"mb-2\"><i class=\"fas fa-angle-right mr-2 ml-1\"></i> <strong class=\"text-color-light\">Email:</strong>
\t\t\t\t\t\t<a href=\"mailto:mail@example.com\" class=\"link-underline-light\">mail@example.com</a></li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"social-icons social-icons-transparent social-icons-iconlight social-icons-lg\">
\t\t\t\t\t<li class=\"social-icons-facebook\"><a href=\"http://www.facebook.com/\" target=\"_blank\" title=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a></li>
\t\t\t\t\t<li class=\"social-icons-googleplus\"><a href=\"https://plus.google.com/?hl=vi\" target=\"_blank\" title=\"Googleplus\"><i
\t\t\t\t\t\t\t class=\"fab fa-google-plus-g\"></i></a></li>
\t\t\t\t\t<li class=\"social-icons-skype\"><a href=\"https://www.skype.com/en/\" target=\"_blank\" title=\"skype\"><i class=\"fab fa-skype\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 mb-4 mb-lg-0\">
\t\t\t\t<h2 class=\"font-weight-semibold text-1 mb-3\">TRANG LIÊN KẾT</h2>
\t\t\t\t<ul class=\"list list-unstyled\">
\t\t\t\t\t<li class=\"mb-2\"><i class=\"fas fa-angle-right mr-2 ml-1\"></i> <a href=\"https://ais.gov.vn/home.htm\">Cục an toàn
\t\t\t\t\t\t\tthông tin</a></li>
\t\t\t\t\t<li class=\"mb-2\"><i class=\"fas fa-angle-right mr-2 ml-1\"></i> <a href=\"http://mic.gov.vn/Pages/trangchu.aspx\">Bộ
\t\t\t\t\t\t\tthông tin truyền thông</a></li>

\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<h2 class=\"font-weight-semibold text-1 mb-3\">GỬI TIN NHẮN</h2>
\t\t\t\t<form class=\"contact-form contact-form-dark form-errors-light\" action=\"php/contact-form.php\" method=\"POST\" data-request=\"onSend\">
\t\t\t\t\t<div class=\"contact-form-success alert alert-success d-none\">
\t\t\t\t\t\tTin nhắn của bạn đã được gửi thành công.
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"contact-form-error alert alert-danger d-none\">
\t\t\t\t\t\t<strong>Lỗi!</strong> Tin nhắn gửi đi không thành công.
\t\t\t\t\t\t<span class=\"mail-error-message d-block\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<input type=\"text\" value=\"\" data-msg-required=\"Chưa nhập họ tên\" maxlength=\"100\" class=\"form-control\" name=\"name\"
\t\t\t\t\t\t\t id=\"name\" placeholder=\"Họ tên\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<input type=\"email\" value=\"\" data-msg-required=\"Chưa nhập địa chỉ E-mail\" data-msg-email=\"Sai cấu trúc địa chỉ E-mail (mail@example.com)\"
\t\t\t\t\t\t\t maxlength=\"100\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"E-mail\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t<div class=\"form-group col\">
\t\t\t\t\t\t\t<input type=\"text\" value=\"\" data-msg-required=\"Chưa nhập tiêu đề\" maxlength=\"100\" class=\"form-control\" name=\"subject\"
\t\t\t\t\t\t\t id=\"subject\" placeholder=\"Tiêu đề\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t<div class=\"form-group col\">
\t\t\t\t\t\t\t<textarea maxlength=\"5000\" data-msg-required=\"Chưa nhập nội dung tin nhắn\" rows=\"5\" class=\"form-control\" name=\"message\"
\t\t\t\t\t\t\t id=\"message\" placeholder=\"Nội dung\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row mt-2\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"GỬI\" class=\"btn btn-primary btn-rounded btn-4 font-weight-semibold text-0\"
\t\t\t\t\t\t\t data-loading-text=\"Loading...\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<a href=\"#\"><img src=\"{{ 'logo.png'|media }}\" width=\"78\" height=\"70\" alt=\"NCSC-logo\" class=\"img-fluid\" /></a>
\t\t\t\t\t<p class=\"pt-3 pb-5\">Bản quyền thuộc Trung tâm giám sát an toàn không gian mạng quốc gia. </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>", "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/landingPage/partials/footer.htm", "");
    }
}
