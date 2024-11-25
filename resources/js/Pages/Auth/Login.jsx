import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import PrimaryButton from "@/Components/PrimaryButton";
import SecondaryButton from "@/Components/SecondaryButton";
import TextInput from "@/Components/TextInput";
import GuestLayout from "@/Layouts/GuestLayout";
import ApplicationLogo from "@/Components/ApplicationLogo";
import { Head, Link, useForm } from "@inertiajs/react";
import { FcGoogle } from "react-icons/fc";
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/Components/ui/card";

export default function Login({ status, canResetPassword }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: "",
        password: "",
        remember: false,
    });

    const submit = (e) => {
        e.preventDefault();

        post(route("login"), {
            onFinish: () => reset("password"),
        });
    };

    return (
        <GuestLayout>
            <Head title="Log in" />

            {status && (
                <div className="mb-4 text-sm font-medium text-green-600">
                    {status}
                </div>
            )}

            <Card>
                <CardHeader>
                    <CardTitle>
                        <div className="flex flex-col justify-center items-center capitalize font-bold py-4">
                            <Link href="/">
                                <ApplicationLogo className="h-20 w-20 fill-current text-gray-500" />
                            </Link>
                            <h1 className="text-3xl">login</h1>
                        </div>
                    </CardTitle>
                    <CardDescription>
                        <div className="flex justify-center items-center">
                            <p className="text-lg text-center w-[300px]">
                                Enter your email below to login to your account
                            </p>
                        </div>
                    </CardDescription>
                </CardHeader>
                <CardContent>
                    <form onSubmit={submit}>
                        <div>
                            <InputLabel htmlFor="email" value="Email" />

                            <TextInput
                                id="email"
                                type="email"
                                name="email"
                                value={data.email}
                                className="mt-1 block w-full"
                                autoComplete="username"
                                isFocused={true}
                                onChange={(e) =>
                                    setData("email", e.target.value)
                                }
                            />

                            <InputError
                                message={errors.email}
                                className="mt-2"
                            />
                        </div>

                        <div className="mt-4">
                            <InputLabel htmlFor="password" value="Password" />

                            <TextInput
                                id="password"
                                type="password"
                                name="password"
                                value={data.password}
                                className="mt-1 block w-full"
                                autoComplete="current-password"
                                onChange={(e) =>
                                    setData("password", e.target.value)
                                }
                            />

                            <InputError
                                message={errors.password}
                                className="mt-2"
                            />
                        </div>

                        <div className="mt-2 flex items-center justify-end">
                            {canResetPassword && (
                                <Link
                                    href={route("password.request")}
                                    className="rounded-md text-sm text-gray-600  hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                                >
                                    Forgot password?
                                </Link>
                            )}
                        </div>

                        <div className="mt-4 flex items-center text-center justify-center">
                            <PrimaryButton
                                className="w-full"
                                disabled={processing}
                            >
                                Login
                            </PrimaryButton>
                        </div>

                        <div className="mt-2 flex items-center text-center justify-center">
                            <SecondaryButton className="w-full">
                                <FcGoogle className="text-lg mx-2" />
                                Login with Google
                            </SecondaryButton>
                        </div>
                    </form>
                </CardContent>
                <CardFooter>
                    <p className="w-full text-center">
                        Dont have account?{" "}
                        <Link
                            href={route("register")}
                            className="rounded-md text-base text-primary  hover:text-secondary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                        >
                            Register
                        </Link>
                    </p>
                </CardFooter>
            </Card>
        </GuestLayout>
    );
}
