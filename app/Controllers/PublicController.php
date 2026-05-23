<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Service;

class PublicController extends Controller
{
    public function home(): void
    {
        $this->securityHeaders();
        $services = Service::published();
        $this->view('public/home', compact('services'));
    }

    public function about(): void { $this->view('public/page', ['title' => 'Sobre a Techpark', 'body' => 'Somos um hub tecnológico focado em inovação, segurança eletrónica, formação, software e transformação digital.']); }
    public function services(): void { $this->view('public/services', ['services' => Service::published()]); }
    public function solutions(): void { $this->view('public/page', ['title' => 'Soluções', 'body' => 'Soluções tecnológicas para empresas, governo, educação, startups e instituições.']); }
    public function startups(): void { $this->view('public/page', ['title' => 'Startups & Inovação', 'body' => 'Programas de incubação, mentoria e apoio a projetos inovadores.']); }
    public function events(): void { $this->view('public/page', ['title' => 'Eventos', 'body' => 'Workshops, feiras, conferências e encontros tecnológicos.']); }
    public function resources(): void { $this->view('public/page', ['title' => 'Recursos', 'body' => 'Artigos, notícias, guias, documentos e materiais educativos.']); }
    public function progress(): void { $this->view('public/page', ['title' => 'Progresso & Impacto', 'body' => 'Métricas de impacto, projetos, formações e iniciativas realizadas.']); }
    public function contact(): void { $this->view('public/page', ['title' => 'Contactos', 'body' => 'Entre em contacto com a Techpark Mozambique para serviços, parcerias ou projetos.']); }
}
