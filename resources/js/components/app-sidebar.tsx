import { NavFooter } from '@/components/nav-footer';
import { NavMain } from '@/components/nav-main';
import { NavUser } from '@/components/nav-user';
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/react';
import { 
    BookOpen, 
    LayoutGrid, 
    Users, 
    FileText, 
    MessageSquare, 
    GraduationCap,
    Images,
    Building,
    Settings
} from 'lucide-react';

const mainNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
        icon: LayoutGrid,
    },
    {
        title: 'Berita',
        href: '/admin/news',
        icon: FileText,
    },
    {
        title: 'PPDB',
        href: '/admin/ppdb',
        icon: GraduationCap,
    },
    {
        title: 'Saran',
        href: '/admin/feedback',
        icon: MessageSquare,
    },
    {
        title: 'Ekstrakurikuler',
        href: '/admin/extracurriculars',
        icon: Users,
    },
    {
        title: 'Galeri',
        href: '/admin/gallery',
        icon: Images,
    },
    {
        title: 'Fasilitas',
        href: '/admin/facilities',
        icon: Building,
    },
];

const footerNavItems: NavItem[] = [
    {
        title: 'Pengaturan',
        href: '/settings',
        icon: Settings,
    },
    {
        title: 'Dokumentasi',
        href: 'https://laravel.com/docs/starter-kits#react',
        icon: BookOpen,
    },
];

export function AppSidebar() {
    return (
        <Sidebar collapsible="icon" variant="inset" className="bg-black border-r border-yellow-500/20">
            <SidebarHeader className="bg-black border-b border-yellow-500/20">
                <SidebarMenu>
                    <SidebarMenuItem>
                        <SidebarMenuButton size="lg" asChild className="hover:bg-yellow-400/10 data-[active=true]:bg-yellow-400/20">
                            <Link href="/dashboard" prefetch className="flex items-center space-x-3">
                                <span className="text-2xl">🏫</span>
                                <div className="flex flex-col text-left">
                                    <span className="text-yellow-400 font-bold text-lg">SMA Negeri 1</span>
                                    <span className="text-gray-400 text-xs">Admin Panel</span>
                                </div>
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarHeader>

            <SidebarContent className="bg-black">
                <NavMain items={mainNavItems} />
            </SidebarContent>

            <SidebarFooter className="bg-black border-t border-yellow-500/20">
                <NavFooter items={footerNavItems} className="mt-auto" />
                <NavUser />
            </SidebarFooter>
        </Sidebar>
    );
}
