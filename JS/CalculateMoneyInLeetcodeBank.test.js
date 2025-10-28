/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { totalMoney } from './CalculateMoneyInLeetcodeBank.js'

TEST('Starting CalculateMoneyInLeetcodeBank test...', (t) => {
    //Test 1
    let want = 10
    let got = totalMoney( 4 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 37
    got = totalMoney( 10 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 96
    got = totalMoney( 20 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
