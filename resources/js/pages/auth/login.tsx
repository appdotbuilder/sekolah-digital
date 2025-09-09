import { Head, useForm } from '@inertiajs/react';
import { LoaderCircle } from 'lucide-react';
import { FormEventHandler } from 'react';

import InputError from '@/components/input-error';
import TextLink from '@/components/text-link';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthLayout from '@/layouts/auth-layout';

type LoginForm = {
    email: string;
    password: string;
    remember: boolean;
};

interface LoginProps {
    status?: string;
    canResetPassword: boolean;
}

export default function Login({ status, canResetPassword }: LoginProps) {
    const { data, setData, post, processing, errors, reset } = useForm<Required<LoginForm>>({
        email: '',
        password: '',
        remember: false,
    });

    const submit: FormEventHandler = (e) => {
        e.preventDefault();
        post(route('login'), {
            onFinish: () => reset('password'),
        });
    };

    return (
        <AuthLayout title="🔑 Masuk ke Akun Admin" description="Masukkan email dan password untuk mengakses dashboard admin SMA Negeri 1">
            <Head title="Login Admin" />

            <form className="flex flex-col gap-6" onSubmit={submit}>
                <div className="grid gap-6">
                    <div className="grid gap-2">
                        <Label htmlFor="email" className="text-yellow-400 font-medium">Alamat Email</Label>
                        <Input
                            id="email"
                            type="email"
                            required
                            autoFocus
                            tabIndex={1}
                            autoComplete="email"
                            value={data.email}
                            onChange={(e) => setData('email', e.target.value)}
                            placeholder="admin@sman1.sch.id"
                            className="bg-black border-gray-600 text-white focus:border-yellow-400 focus:ring-yellow-400 placeholder:text-gray-400"
                        />
                        <InputError message={errors.email} />
                    </div>

                    <div className="grid gap-2">
                        <div className="flex items-center">
                            <Label htmlFor="password" className="text-yellow-400 font-medium">Password</Label>
                            {canResetPassword && (
                                <TextLink href={route('password.request')} className="ml-auto text-sm text-yellow-400 hover:text-yellow-300" tabIndex={5}>
                                    Lupa password?
                                </TextLink>
                            )}
                        </div>
                        <Input
                            id="password"
                            type="password"
                            required
                            tabIndex={2}
                            autoComplete="current-password"
                            value={data.password}
                            onChange={(e) => setData('password', e.target.value)}
                            placeholder="Masukkan password"
                            className="bg-black border-gray-600 text-white focus:border-yellow-400 focus:ring-yellow-400 placeholder:text-gray-400"
                        />
                        <InputError message={errors.password} />
                    </div>

                    <div className="flex items-center space-x-3">
                        <Checkbox
                            id="remember"
                            name="remember"
                            checked={data.remember}
                            onClick={() => setData('remember', !data.remember)}
                            tabIndex={3}
                            className="border-gray-600 data-[state=checked]:bg-yellow-400 data-[state=checked]:border-yellow-400"
                        />
                        <Label htmlFor="remember" className="text-white">Ingat saya</Label>
                    </div>

                    <Button 
                        type="submit" 
                        className="mt-4 w-full bg-yellow-400 text-black hover:bg-yellow-300 font-semibold py-3 rounded-lg transform hover:scale-105 transition-all duration-300" 
                        tabIndex={4} 
                        disabled={processing}
                    >
                        {processing && <LoaderCircle className="h-4 w-4 animate-spin mr-2" />}
                        {processing ? 'Sedang Masuk...' : '🔑 Masuk ke Dashboard'}
                    </Button>
                </div>

                <div className="text-center text-sm text-gray-400">
                    Belum punya akun admin?{' '}
                    <TextLink href={route('register')} tabIndex={5} className="text-yellow-400 hover:text-yellow-300 font-medium">
                        Daftar di sini
                    </TextLink>
                </div>
            </form>

            {status && <div className="mb-4 text-center text-sm font-medium text-green-400 bg-green-400/10 border border-green-400/30 rounded-lg p-3">✅ {status}</div>}
        </AuthLayout>
    );
}
