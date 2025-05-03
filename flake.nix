{
  description = "Flux";

  inputs = {
    nixpkgs.url = "github:nixos/nixpkgs?ref=nixos-24.11";
    flake-utils.url = "github:numtide/flake-utils";
  };

  outputs =
    {
      self,
      nixpkgs,
      flake-utils,
    }:

    flake-utils.lib.eachDefaultSystem (
      system:
      let
        name = "flux";
        src = ./.;
        pkgs = nixpkgs.legacyPackages.${system};
        buildInputs =
          (with pkgs; [
            php84
          ])
          ++ (with pkgs.php84Packages; [
            composer
          ])
          ++ (with pkgs.php84Extensions; [
            ### Laravel Extensions
            ## https://laravel.com/docs/12.x/deployment#server-requirements
            # Ctype PHP Extension
            ctype
            # cURL PHP Extension
            curl
            # DOM PHP Extension
            dom
            # Fileinfo PHP Extension
            fileinfo
            # Filter PHP Extension
            filter
            # Hash PHP Extension
            ## TODO
            # Mbstring PHP Extension
            mbstring
            # OpenSSL PHP Extension
            openssl
            # PCRE PHP Extension
            ## TODO
            # PDO PHP Extension
            pdo
            # Session PHP Extension
            session
            # Tokenizer PHP Extension
            tokenizer
            # XML PHP Extension
            xml
            xmlwriter

            apcu
            ds
            iconv
            soap
            yaml
            zip
            zlib
          ]);
        nativeBuildInputs =
          (with pkgs; [
            nodejs_23
          ])
          ++ (with pkgs; [
            cowsay
            lolcat
            # more stuff
          ]);
        shellHook = ''
          echo "PHP 8.4 environment ready" | cowsay -f elephant | lolcat -p 30 -F 0.1 -S 35;
        '';
      in
      {
        # packages.default = derivation {
        #   inherit system name src;
        #   builder = with pkgs; "${bash}/bin/bash";
        #   args = [
        #     "-c"
        #     "echo foo > $out"
        #   ];
        # };

        devShells.default = pkgs.mkShell {
          inherit buildInputs;
          inherit nativeBuildInputs;
          inherit shellHook;
        };
      }
    );
}
