import { SidebarGroup, SidebarGroupLabel, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { Link, usePage } from '@inertiajs/react';

export function NavMain({ items = [] }: { items: NavItem[] }) {
    const page = usePage();
    return (
        <SidebarGroup className="px-2 py-0">
            <SidebarGroupLabel className="text-yellow-400 font-semibold">📚 Menu Utama</SidebarGroupLabel>
            <SidebarMenu>
                {items.map((item) => (
                    <SidebarMenuItem key={item.title}>
                        <SidebarMenuButton 
                            asChild 
                            isActive={page.url.startsWith(item.href)} 
                            tooltip={{ children: item.title }}
                            className="hover:bg-yellow-400/10 hover:text-yellow-400 data-[active=true]:bg-yellow-400 data-[active=true]:text-black transition-all duration-300 group"
                        >
                            <Link href={item.href} prefetch className="flex items-center space-x-3">
                                {item.icon && (
                                    <item.icon className="h-4 w-4 group-hover:text-yellow-400 group-data-[active=true]:text-black transition-colors" />
                                )}
                                <span className="group-hover:text-yellow-400 group-data-[active=true]:text-black transition-colors font-medium">
                                    {item.title}
                                </span>
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                ))}
            </SidebarMenu>
        </SidebarGroup>
    );
}
