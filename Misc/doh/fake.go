package main

import (
	"golang.org/x/net/context"
	"net/http"
	"time"
)

func (s *Server) generateResponseFlag(ctx context.Context, w http.ResponseWriter, r *http.Request, req *DNSRequest) {

	respStr := []byte(`{"Status":0,"TC":false,"RD":true,"RA":true,"AD":true,"CD":false,"Question":[{"name":"www.flag.com","type":1}],"Authority":[{"name":"www.flag.com","type":46,"data":"SOA 8 0 86400 20231006050000 20230923040000 11019 www.flag.com TTumUTWi6VXu+3WLNHRLfIcldB5hd8LYBre5aBLD0059I4uOBz4AF3EV88JnkOMDyM08SIo1EQ4fJXy3gjIEunMb1pyapECtP8oTho71xvSAex5PAAJ4pNO/lydjX61yXxSeHLaDwD3bgSEtxuVts42EnW4p6q128xOsJH121Ki8qFGQqTBeJhRnJsG1cDcywRnwLJcUuM5XSyivjArprH/+oaiULlq0lF7RjoyPZsqeNKL90Qhio/4z0Qc4zzyqchlStAYkbFT2GQrD7GfPzv0TsGUIeSfXHQfn+vR1R1Ueh/Kp3Oioi8BwQV8IKR6z7ocVXCFx1hi+YemdoTnVUQ=="},{"name":"www.flag.com","type":46,"data":"TXT www.flag.com flag{just_do_a_DoH_query_haha}"}]},{"name":"www.flag.com","type":46,"data":"NSEC 8 0 86400 20231006050000 20230923040000 11019 www.flag.com M5am7nqoJ+yLSzirJOkFSmHbqmvzpGftB1P+lVu9ZTLBEquWc/Zi6HgaNVoPizGwpJWJUsbshyhkbAtIFPVNBBDbrZ+5FpyDCGheu34a0va4A4F3hDYL9MDuLI09XA/j2picPjwnD8CLNsJIHJnvS1OyGCRXkRwOZVgoTyMoyzmahucftJBDDf+B291JWIam9Ga2UhaaGllmi4R1G9KABrdA4DENWfH0h6yO/GyIV609dqaOaVQzvqIH4WM8JrZcMDOg/J+aVwaOj3SutN1Gk4vjGwd+5+XWAS/zchp4NXphq8z1/y8MckjerHUuijsPh+PtblyCNamxkPZeK9ukEg=="}`)

	w.Header().Set("Content-Type", "application/json; charset=UTF-8")
	now := time.Now().UTC().Format(http.TimeFormat)
	w.Header().Set("Date", now)
	w.Header().Set("Last-Modified", now)
	w.Header().Set("Vary", "Accept")
	w.Write(respStr)
}
