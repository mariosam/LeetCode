/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countSeniors } from './NumberOfSeniorCitizens.js'

TEST('Starting NumberOfSeniorCitizens test...', (t) => {
    //Test 1
    let want = 2
    let got = countSeniors( ["7868190130M7522","5303914400F9211","9273338290F4010"] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = countSeniors( ["1313579440F2036","2921522980M5644"] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
