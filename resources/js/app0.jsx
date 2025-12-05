import "./bootstrap";
import React from "react";
import { createRoot } from "react-dom/client";
import WaitingListForm from "./components/forms/WaitingListForm";

// Mount React components when DOM is ready
document.addEventListener("DOMContentLoaded", () => {
    // Mount Waiting List Form
    const waitingListRoot = document.getElementById("waiting-list-form-root");

    if (waitingListRoot) {
        const locale = waitingListRoot.dataset.locale || "en";
        const translations = JSON.parse(
            waitingListRoot.dataset.translations || "{}"
        );
        const submitUrl = waitingListRoot.dataset.submitUrl || "";

        const root = createRoot(waitingListRoot);
        root.render(
            <WaitingListForm
                locale={locale}
                translations={translations}
                submitUrl={submitUrl}
            />
        );
    }
});
