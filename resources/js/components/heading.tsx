export default function Heading({ title, description }: { title: string; description?: string }) {
    return (
        <div className="mb-8 space-y-0.5">
            <h2 className="text-2xl font-bold tracking-tight text-yellow-400">{title}</h2>
            {description && <p className="text-sm text-gray-300">{description}</p>}
        </div>
    );
}
