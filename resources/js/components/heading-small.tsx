export default function HeadingSmall({ title, description }: { title: string; description?: string }) {
    return (
        <header>
            <h3 className="mb-0.5 text-lg font-bold text-yellow-400">{title}</h3>
            {description && <p className="text-sm text-gray-300">{description}</p>}
        </header>
    );
}
