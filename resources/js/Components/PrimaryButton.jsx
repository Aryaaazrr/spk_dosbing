export default function PrimaryButton({
    className = "",
    disabled,
    children,
    ...props
}) {
    return (
        <button
            {...props}
            className={
                `inline-flex justify-center items-center rounded-md border border-transparent bg-primary w-full px-4 py-2 font-medium capitalize tracking-widest text-white transition duration-150 ease-in-out hover:bg-secondary focus:bg-secondary focus:opacity-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 active:bg-secondary dark:bg-gray-200 dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-gray-800 dark:active:bg-gray-300 ${
                    disabled && "opacity-25"
                } ` + className
            }
            disabled={disabled}
        >
            {children}
        </button>
    );
}
