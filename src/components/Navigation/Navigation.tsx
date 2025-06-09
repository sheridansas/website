import { faDiscord, faGithub } from "@fortawesome/free-brands-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import React, { FC } from "react";

interface NavigationProps {}

const Navigation: FC<NavigationProps> = () => (
  <div>
    <header className="text-white ubuntu-mono-bold">
      <div className="flex items-center justify-between py-4 mx-auto max-w-5xl">
        <div className="flex items-center space-x-3 text-xl font-semibold">
          <img
            src="https://wallpapers.com/images/hd/cosmic-portal-c-r-t-monitor-li2zpr22seafz9q7-li2zpr22seafz9q7.png"
            alt="SAS Logo"
            className="w-10 h-10"
          />

          {/*
            TODO: NOTE:
            - Removed for now, using boilerplate.
            <div className="hidden lg:inline">
              Sheridan Server Administration Society
            </div>

            <div className="hidden md:inline lg:hidden">Sheridan SAS</div>

            <div className="inline md:hidden">SAS</div>
          */}
        </div>
        <div className="flex items-center space-x-4">
          <a
            href="https://discord.com"
            target="_blank"
            className="hover:text-indigo-400"
            rel="noreferrer"
          >
            <FontAwesomeIcon icon={faDiscord} size="lg" />
          </a>
          <a
            href="https://github.com"
            target="_blank"
            className="hover:text-gray-400"
            rel="noreferrer"
          >
            <FontAwesomeIcon icon={faGithub} size="lg" />
          </a>
        </div>
      </div>
    </header>
  </div>
);

export default Navigation;
