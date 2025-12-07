import React, { useState } from "react";

const WaitingListForm = ({ locale, translations, submit_url }) => {
    const [formData, setFormData] = useState({
        name: "",
        email: "",
        phone: "",
        store_url: "",
    });
    const [errors, setErrors] = useState({});
    const [isSubmitting, setIsSubmitting] = useState(false);
    const [submitStatus, setSubmitStatus] = useState(null); // 'success' | 'error' | null
    const [errorMessage, setErrorMessage] = useState("");
    const isRtl = locale === "ar";

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData((prev) => ({ ...prev, [name]: value }));
        // Clear error when user starts typing
        if (errors[name]) {
            setErrors((prev) => ({ ...prev, [name]: null }));
        }
    };

    const handleSubmit = async (e) => {
        e.preventDefault();

        // reset previous errors and messages
        setErrors({});
        setErrorMessage("");
        setSubmitStatus(null);
        setIsSubmitting(true);

        try {
            const response = await fetch(submit_url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json",
                    "X-CSRF-TOKEN":
                        document.querySelector('meta[name="csrf-token"]')
                            ?.content || "",
                },
                body: JSON.stringify(formData),
            });

            const data = await response.json();

            if (!response.ok) {
                // Handle 422 Validation Errors
                if (response.status === 422) {
                    console.log("422 Validation Errors");

                    setSubmitStatus("error");

                    // Laravel returns errors in this format:
                    // { message: "...", errors: { field: ["error1", "error2"] } }
                    if (data.errors) {
                        const formattedErrors = {};
                        Object.keys(data.errors).forEach((key) => {
                            // Take first error message for each field
                            formattedErrors[key] = data.errors[key][0];
                        });
                        setErrors(formattedErrors);
                    }

                    setErrorMessage(translations.validation_error);
                    return;
                }

                // Handle 500 Server Errors or other errors
                if (response.status === 500) {
                    console.log("500 Server Errors");

                    setSubmitStatus("error");
                    setErrorMessage(translations.server_error);
                    return;
                }

                // Handle any other HTTP errors
                setSubmitStatus("error");
                setErrorMessage(data.message || translations.error_message);
                return;
            }

            // Success
            setSubmitStatus("success");
            setFormData({ name: "", email: "", phone: "", store_url: "" });
        } catch (error) {
            // Network errors, parsing errors, etc.
            console.log("Network errors, parsing errors, etc");

            console.error("Submit error:", error);
            setSubmitStatus("error");
            setErrorMessage(translations.error_message);
        } finally {
            setIsSubmitting(false);
        }
    };

    if (submitStatus === "success") {
        return (
            <div
                className={`bg-kunooz-status-success/10 border border-kunooz-status-success/30 rounded-2xl p-8 ${
                    isRtl ? "text-right" : "text-left"
                }`}
            >
                <div className="flex items-center gap-3 mb-4">
                    <div className="w-12 h-12 bg-kunooz-status-success/20 rounded-full flex items-center justify-center">
                        <svg
                            className="w-6 h-6 text-kunooz-status-success"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth={2}
                                d="M5 13l4 4L19 7"
                            />
                        </svg>
                    </div>
                    <div>
                        <h3 className="text-lg font-semibold text-kunooz-status-success">
                            {isRtl ? "تم بنجاح!" : "Success!"}
                        </h3>
                    </div>
                </div>
                <p className="text-kunooz-text-muted">
                    {translations.success_message}
                </p>
            </div>
        );
    }

    return (
        <form
            id="waiting-list-form"
            onSubmit={handleSubmit}
            className="space-y-5"
            dir={isRtl ? "rtl" : "ltr"}
        >
            {submitStatus === "error" && (
                <div className="bg-kunooz-status-error/10 border border-kunooz-status-error/30 rounded-xl p-4 flex items-center gap-3">
                    <svg
                        className="w-5 h-5 text-kunooz-status-error flex-shrink-0"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            strokeWidth={2}
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>
                    <p className="text-sm text-kunooz-status-error">
                        {errorMessage}
                    </p>
                </div>
            )}

            {/* Name Field */}
            <div className="space-y-2">
                <label
                    htmlFor="name"
                    className={`block text-sm font-medium text-kunooz-text ${
                        isRtl ? "text-right" : "text-left"
                    }`}
                >
                    {translations.name_label}
                    <span className="text-kunooz-status-error">*</span>
                </label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value={formData.name}
                    onChange={handleChange}
                    placeholder={translations.name_placeholder}
                    className={`w-full px-4 py-3 rounded-xl border ${
                        errors.name
                            ? "border-kunooz-status-error focus:ring-kunooz-status-error/30"
                            : "border-kunooz-border-subtle focus:ring-kunooz-primary-500/80"
                    } focus:outline-none focus:ring-2 focus:border-transparent bg-white transition-all duration-200 ${
                        isRtl ? "text-right" : "text-left"
                    }`}
                />
                {errors.name && (
                    <p
                        className={`text-sm text-kunooz-status-error ${
                            isRtl ? "text-right" : "text-left"
                        }`}
                    >
                        {errors.name}
                    </p>
                )}
            </div>

            {/* Email Field */}
            <div className="space-y-2">
                <label
                    htmlFor="email"
                    className={`block text-sm font-medium text-kunooz-text ${
                        isRtl ? "text-right" : "text-left"
                    }`}
                >
                    {translations.email_label}
                    <span className="text-kunooz-status-error">*</span>
                </label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value={formData.email}
                    onChange={handleChange}
                    placeholder={translations.email_placeholder}
                    className={`w-full px-4 py-3 rounded-xl border ${
                        errors.email
                            ? "border-kunooz-status-error focus:ring-kunooz-status-error/30"
                            : "border-kunooz-border-subtle focus:ring-kunooz-primary-500/80"
                    } focus:outline-none focus:ring-2 focus:border-transparent bg-white transition-all duration-200 ${
                        isRtl ? "text-right" : "text-left"
                    }`}
                    dir="ltr"
                />
                {errors.email && (
                    <p
                        className={`text-sm text-kunooz-status-error ${
                            isRtl ? "text-right" : "text-left"
                        }`}
                    >
                        {errors.email}
                    </p>
                )}
            </div>

            {/* Phone Field */}
            <div className="space-y-2">
                <label
                    htmlFor="phone"
                    className={`block text-sm font-medium text-kunooz-text ${
                        isRtl ? "text-right" : "text-left"
                    }`}
                >
                    {translations.phone_label}
                    <span className="text-kunooz-status-error">*</span>
                </label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    value={formData.phone}
                    onChange={handleChange}
                    placeholder={translations.phone_placeholder}
                    className={`w-full px-4 py-3 rounded-xl border ${
                        errors.phone
                            ? "border-kunooz-status-error focus:ring-kunooz-status-error/30"
                            : "border-kunooz-border-subtle focus:ring-kunooz-primary-500/80"
                    } focus:outline-none focus:ring-2 focus:border-transparent bg-white transition-all duration-200 ${
                        isRtl ? "text-right" : "text-left"
                    }`}
                    dir="ltr"
                />
                {errors.phone && (
                    <p
                        className={`text-sm text-kunooz-status-error ${
                            isRtl ? "text-right" : "text-left"
                        }`}
                    >
                        {errors.phone}
                    </p>
                )}
            </div>

            {/* Store URL Field */}
            <div className="space-y-2">
                <label
                    htmlFor="store_url"
                    className={`block text-sm font-medium text-kunooz-text ${
                        isRtl ? "text-right" : "text-left"
                    }`}
                >
                    {translations.store_label}
                </label>
                <input
                    type="url"
                    id="store_url"
                    name="store_url"
                    value={formData.store_url}
                    onChange={handleChange}
                    placeholder={translations.store_placeholder}
                    className={`w-full px-4 py-3 rounded-xl border ${
                        errors.store_url
                            ? "border-kunooz-status-error focus:ring-kunooz-status-error/30"
                            : "border-kunooz-border-subtle focus:ring-kunooz-primary-500/80"
                    } focus:outline-none focus:ring-2 focus:border-transparent bg-white transition-all duration-200`}
                    dir="ltr"
                />
                {errors.store_url && (
                    <p
                        className={`text-sm text-kunooz-status-error ${
                            isRtl ? "text-right" : "text-left"
                        }`}
                    >
                        {errors.store_url}
                    </p>
                )}
            </div>

            {/* Submit Button */}
            <button
                type="submit"
                disabled={isSubmitting}
                className={`w-full py-4 px-6 text-base font-semibold text-white bg-gradient-kunooz rounded-xl shadow-kunooz-md hover:shadow-kunooz-lg transition-all duration-300 transform hover:-translate-y-0.5 disabled:opacity-70 disabled:cursor-not-allowed disabled:transform-none flex items-center justify-center gap-2`}
            >
                {isSubmitting ? (
                    <>
                        <svg
                            className="animate-spin h-5 w-5"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <circle
                                className="opacity-25"
                                cx="12"
                                cy="12"
                                r="10"
                                stroke="currentColor"
                                strokeWidth="4"
                            ></circle>
                            <path
                                className="opacity-75"
                                fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                            ></path>
                        </svg>
                        <span>
                            {isRtl ? "جاري الإرسال..." : "Submitting..."}
                        </span>
                    </>
                ) : (
                    <>
                        <span>{translations.cta}</span>
                    </>
                )}
            </button>

            {/* <button
                type="submit"
                class="w-full px-6 py-3 bg-gradient-kunooz-teal text-kunooz-text-onPrimary font-semibold rounded-xl shadow-kunooz-md hover:shadow-kunooz-lg hover:scale-[1.02] transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed font-ar text-base"
                dir="rtl"
            >
                {translations.cta}
            </button> */}

            {/* Privacy Note */}
            <p
                className={`text-sm text-kunooz-text-subtle flex items-start gap-2 ${
                    isRtl ? "text-right" : "text-left"
                }`}
            >
                <svg
                    className="w-4 h-4 flex-shrink-0 mt-0.5 text-kunooz-accent-500"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth={2}
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                    />
                </svg>
                {translations.privacy_note}
            </p>
        </form>
    );
};

export default WaitingListForm;
