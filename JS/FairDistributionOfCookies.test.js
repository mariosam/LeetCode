/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { distributeCookies } from './FairDistributionOfCookies.js'

TEST('Starting FairDistributionOfCookies test...', (t) => {
    //Test 1
    let want = 31
    let got = distributeCookies( [8,15,10,20,8], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 7
    got = distributeCookies( [6,1,3,2,2,4,1,2], 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
