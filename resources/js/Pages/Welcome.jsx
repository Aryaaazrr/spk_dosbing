import { Head } from '@inertiajs/react';
import Navbar from "@/components/Website/Navbar";
import HeroSection from "@/components/Website/HeroSection";
import FeatureSection from "@/components/Website/FeatureSection";
import Workflow from "@/components/Website/Workflow";
import Footer from "@/components/Website/Footer";
import Pricing from "@/components/Website/Pricing";
import Testimonials from "@/components/Website/Testimonials";

export default function Welcome() {
    return (
        <>
         <Head title="Landing Page" />
          <Navbar />
          <div className="max-w-7xl mx-auto pt-20 px-6">
            <HeroSection />
            <FeatureSection />
            <Workflow />
            <Pricing />
            <Testimonials />
            <Footer />
          </div>
        </>
      );
}
