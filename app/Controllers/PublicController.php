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
    public function solutions(): void
    {
        $solutions = [
            [
                'title' => 'Plataformas Web Corporativas',
                'category' => 'Software',
                'summary' => 'Portais institucionais, websites empresariais, CMS e sistemas administrativos personalizados.',
            ],
            [
                'title' => 'Sistemas de Gestão',
                'category' => 'Gestão Digital',
                'summary' => 'Soluções para gerir processos, equipas, documentos, auditoria, clientes e operações internas.',
            ],
            [
                'title' => 'Soluções de Segurança Eletrónica',
                'category' => 'Segurança',
                'summary' => 'Integração de CCTV, controlo de acesso, alarmes, monitoria e gestão técnica centralizada.',
            ],
            [
                'title' => 'Portais para Startups e Incubadoras',
                'category' => 'Inovação',
                'summary' => 'Ferramentas para candidaturas, avaliação de projetos, mentoria, eventos e acompanhamento de startups.',
            ],
            [
                'title' => 'Soluções Educacionais',
                'category' => 'Educação',
                'summary' => 'Plataformas para formação, cursos, certificação, gestão de conteúdos e aprendizagem digital.',
            ],
            [
                'title' => 'Dashboards & Métricas',
                'category' => 'Inteligência',
                'summary' => 'Painéis de indicadores, relatórios, métricas operacionais e análise de desempenho para tomada de decisão.',
            ],
        ];

        $this->view('public/solutions', compact('solutions'));
    }

    public function startups(): void
    {
        $startups = [
            [
                'name' => 'AgriTech MZ',
                'sector' => 'Agricultura Digital',
                'summary' => 'Solução para ligar produtores, compradores e dados agrícolas em tempo real.',
            ],
            [
                'name' => 'EduConnect',
                'sector' => 'Educação',
                'summary' => 'Plataforma para formação, cursos digitais e capacitação de jovens talentos.',
            ],
            [
                'name' => 'HealthLink',
                'sector' => 'Saúde Digital',
                'summary' => 'Ferramentas para melhorar acesso, gestão e comunicação em serviços de saúde.',
            ],
            [
                'name' => 'FinAccess',
                'sector' => 'Fintech',
                'summary' => 'Soluções digitais para inclusão financeira e gestão simplificada de pagamentos.',
            ],
            [
                'name' => 'SafeCity',
                'sector' => 'Segurança Urbana',
                'summary' => 'Tecnologia para monitoria, resposta rápida e gestão inteligente de segurança.',
            ],
            [
                'name' => 'MarketMZ',
                'sector' => 'Comércio Digital',
                'summary' => 'Marketplace para promover produtos e serviços criados por empreendedores locais.',
            ],
        ];

        $this->view('public/startups', compact('startups'));
    }
    public function events(): void
    {
        $events = [
            [
                'title' => 'Workshop de Transformação Digital',
                'type' => 'Workshop',
                'date' => '15 Junho 2026',
                'status' => 'Próximo',
                'summary' => 'Sessão prática sobre digitalização de processos para empresas e instituições.',
            ],
            [
                'title' => 'Techpark Startup Day',
                'type' => 'Networking',
                'date' => '28 Julho 2026',
                'status' => 'Próximo',
                'summary' => 'Encontro para apresentação de startups, mentoria e oportunidades de parceria.',
            ],
            [
                'title' => 'Conferência de Segurança Eletrónica',
                'type' => 'Conferência',
                'date' => '18 Setembro 2026',
                'status' => 'Planeado',
                'summary' => 'Debate sobre CCTV, controlo de acesso, monitoria e segurança integrada.',
            ],
        ];

        $this->view('public/events', compact('events'));
    }
    public function resources(): void
    {
        $resources = [
            [
                'title' => 'Carta de Apresentação Techpark',
                'category' => 'Institucional',
                'type' => 'PDF',
                'size' => '2.4 MB',
                'date' => '2026',
                'description' => 'Documento institucional de apresentação da Techpark Mozambique.',
                'file' => '#',
            ],
            [
                'title' => 'Panfleto de Serviços',
                'category' => 'Marketing',
                'type' => 'PDF',
                'size' => '1.8 MB',
                'date' => '2026',
                'description' => 'Resumo visual dos principais serviços oferecidos.',
                'file' => '#',
            ],
            [
                'title' => 'Programa de Incubação',
                'category' => 'Programas',
                'type' => 'PDF',
                'size' => '3.1 MB',
                'date' => '2026',
                'description' => 'Informação sobre apoio a startups e projetos inovadores.',
                'file' => '#',
            ],
            [
                'title' => 'Newsletter Tecnológica',
                'category' => 'Newsletter',
                'type' => 'PDF',
                'size' => '900 KB',
                'date' => '2026',
                'description' => 'Atualizações, notícias e oportunidades do ecossistema Techpark.',
                'file' => '#',
            ],
            [
                'title' => 'Imagens Institucionais',
                'category' => 'Media',
                'type' => 'ZIP',
                'size' => '12 MB',
                'date' => '2026',
                'description' => 'Pacote com imagens públicas da Techpark para comunicação.',
                'file' => '#',
            ],
        ];

        $categories = ['Todos', 'Institucional', 'Marketing', 'Programas', 'Newsletter', 'Media', 'Outros'];

        $this->view('public/resources', compact('resources', 'categories'));
    }
    public function progress(): void { $this->view('public/page', ['title' => 'Progresso & Impacto', 'body' => 'Métricas de impacto, projetos, formações e iniciativas realizadas.']); }
    public function contact(): void { $this->view('public/page', ['title' => 'Contactos', 'body' => 'Entre em contacto com a Techpark Mozambique para serviços, parcerias ou projetos.']); }
}
