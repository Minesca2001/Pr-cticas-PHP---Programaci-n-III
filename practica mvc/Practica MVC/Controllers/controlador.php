using Microsoft.AspNetCore.Mvc;

namespace Practica_MVC.Controllers
{
    public class controlador : Controller
    {
        public IActionResult Index()
        {
            return View();
        }
    }
}
