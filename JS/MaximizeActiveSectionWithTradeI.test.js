/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxActiveSectionsAfterTrade } from './MaximizeActiveSectionWithTradeI.js'

TEST('Starting MaximizeActiveSectionWithTradeI test...', (t) => {
    //Test 1
    let want = 1
    let got = maxActiveSectionsAfterTrade("01")
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 4
    got = maxActiveSectionsAfterTrade("0100")
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 7
    got = maxActiveSectionsAfterTrade("1000100")
    t.assert( want === got, "Expect: "+want)
    //Test 4
    want = 4
    got = maxActiveSectionsAfterTrade("01010")
    t.assert( want === got, "Expect: "+want)

    t.end()
})
